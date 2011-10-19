<?php
/***************************************************************
*  Copyright notice
*
*  (c) 2011 Claus Due <claus@wildside.dk>, Wildside A/S
*
*  All rights reserved
*
*  This script is part of the TYPO3 project. The TYPO3 project is
*  free software; you can redistribute it and/or modify
*  it under the terms of the GNU General Public License as published by
*  the Free Software Foundation; either version 3 of the License, or
*  (at your option) any later version.
*
*  The GNU General Public License can be found at
*  http://www.gnu.org/copyleft/gpl.html.
*
*  This script is distributed in the hope that it will be useful,
*  but WITHOUT ANY WARRANTY; without even the implied warranty of
*  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
*  GNU General Public License for more details.
*
*  This copyright notice MUST APPEAR in all copies of the script!
***************************************************************/

/**
 * Dynamic FlexForm insertion hook class
 *
 * @version $Id$
 * @copyright Copyright belongs to the respective authors
 * @license http://www.gnu.org/licenses/gpl.html GNU General Public License, version 3 or later
 * @package Fed
 * @subpackage Backend
 */
class Tx_Fed_Backend_DynamicFlexForm {

	/**
	 * @var Tx_Extbase_Object_ObjectManager
	 */
	protected $objectManager;

	/**
	 *
	 * @var Tx_Fed_Configuration_ConfigurationManager
	 */
	protected $configurationManager;

	/**
	 * @var Tx_Fed_Utility_FlexForm
	 */
	protected $flexform;

	/**
	 * CONSTRUCTOR
	 */
	public function __construct() {
		$this->objectManager = t3lib_div::makeInstance('Tx_Extbase_Object_ObjectManager');
		$this->configurationManager = $this->objectManager->get('Tx_Fed_Configuration_ConfigurationManager');
		$this->flexform = $this->objectManager->get('Tx_Fed_Utility_FlexForm');
	}

	/**
	 * Hook for generating dynamic FlexForm source code
	 *
	 * @param array $dataStructArray
	 * @param array $conf
	 * @param array $row
	 * @param string $table
	 * @param string $fieldName
	 */
	public function getFlexFormDS_postProcessDS(&$dataStructArray, $conf, &$row, $table, $fieldName) {
		if ($table === 'pages' && $GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['fed']['setup']['enableFluidPageTemplates']) {
			$configuration = $this->getPageTemplateConfiguration($row['uid']);
			if ($configuration['tx_fed_page_controller_action']) {
				$action = $configuration['tx_fed_page_controller_action'];
				list ($extensionName, $action) = explode('->', $action);
				$paths = $this->configurationManager->getPageConfiguration($extensionName);
				$templatePath = Tx_Fed_Utility_Path::translatePath($paths['templateRootPath']);
				$templateFile = $templatePath . '/Page/' . $action . '.html';
				if (file_exists($templateFile) === FALSE) {
					throw new Exception('Invalid template file selected - file does not exist: ' . $templateFile, 1318783138);
				}
				$pageFlexFormSource = $this->getPageFlexFormSource($row);
				$values = $this->flexform->convertFlexFormContentToArray($pageFlexFormSource);
				$this->readFlexFormFields($templateFile, $values, $paths, $dataStructArray, $conf, $row, $table, $fieldName);
			}
		} else if ($row['CType'] == 'fed_fce') {
			list ($extensionName, $filename) = explode(':', $row['tx_fed_fcefile']);
			$values = $this->flexform->convertFlexFormContentToArray($row['pi_flexform']);
			$paths = $this->configurationManager->getContentConfiguration($extensionName);
			if ($paths) {
				$filename = $paths['templateRootPath'] . $filename;
				$filename = Tx_Fed_Utility_Path::translatePath($filename);
			} else {
				$filename = $row['tx_fed_fcefile'];
			}
			$this->readFlexFormFields($filename, $values, $paths, $dataStructArray, $conf, $row, $table, $fieldName);
		} else if ($row['CType'] == 'fed_template') {
			$templateFile = t3lib_extMgm::extPath('fed', 'Configuration/FlexForms/Template.xml');
			$dataStructArray = t3lib_div::xml2array(file_get_contents($templateFile));
		} else if ($row['CType'] == 'fed_datasource') {
			$templateFile = t3lib_extMgm::extPath('fed', 'Configuration/FlexForms/DataSource.xml');
			$dataStructArray = t3lib_div::xml2array(file_get_contents($templateFile));
		} else {
				// check for registered Fluid FlexForms based on cType first, then plugin list_type
			$flexFormConfiguration = Tx_Fed_Core::getRegisteredFlexForms('contentObject', $row['cType']);
			if (!$flexFormConfiguration && $row['list_type']) {
				$flexFormConfiguration = Tx_Fed_Core::getRegisteredFlexForms('plugin', $row['list_type']);
			}
			if ($flexFormConfiguration) {
				$values = $this->flexform->convertFlexFormContentToArray($row['pi_flexform']);
				$this->readFlexFormFields($flexFormConfiguration['templateFilename'], $values, $paths, $dataStructArray, $conf, $row, $table, $fieldName);
			}
		}
	}

	/**
	 * Process RootLine to find first usable, configured Fluid Page Template.
	 * WARNING: do NOT use the output of this feature to overwrite $row - the
	 * record returned may or may not be the same recod as defined in $id.
	 *
	 * @param integer $id
	 * @return array
	 */
	protected function getPageTemplateConfiguration($id) {
		$pageSelect = new t3lib_pageSelect();
		$rootLine = $pageSelect->getRootLine($id);
		$rootLine = array_reverse($rootLine);
		foreach ($rootLine as $row) {
			if (strpos($row['tx_fed_page_controller_action'], '->')) {
				return $row;
			}
			if (strpos($row['tx_fed_page_controller_action_sub'], '->')) {
				$row['tx_fed_page_controller_action'] = $row['tx_fed_controller_action_sub'];
				return $row;
			}
		}
	}

	protected function getPageFlexFormSource($row) {
		if ($row['tx_fed_page_flexform'] != '') {
			return $row['tx_fed_page_flexform'];
		}
		if ($row['pid'] > 0) {
			$parent = $GLOBALS['TYPO3_DB']->exec_SELECTgetSingleRow('*', 'pages', "uid = '{$row['pid']}'");
			return $this->getPageFlexFormSource($parent);
		}
		return NULL;
	}

	/**
	 * Updates $dataStructArray by reference, filling it with a proper data structure
	 * based on the selected template file.
	 *
	 * @param string $templateFile
	 * @param array $values
	 * @param array $paths
	 * @param array $dataStructArray
	 * @param arrat $conf
	 * @param array $row
	 * @param string $table
	 * @param string $fieldName
	 * @return void
	 */
	protected function readFlexFormFields($templateFile, $values, $paths, &$dataStructArray, $conf, $row, $table, $fieldName) {
		$onInvalid = array('ROOT' => array('type' => 'array', 'el' => array('void' => array('config' => 'input', 'default' => $templateFile))));
		if (is_file(PATH_site . $templateFile) === FALSE) {
			$dataStructArray = $onInvalid;
			return;
		}
		try {
			$view = $this->objectManager->get('Tx_Fed_View_ExposedTemplateView');
			$view->setTemplatePathAndFilename(PATH_site . $templateFile);
			$view->assignMultiple($values);
			$config = $view->getStoredVariable('Tx_Fed_ViewHelpers_FceViewHelper', 'storage', 'Configuration');
			$groups = array();
			foreach ($config['fields'] as $field) {
				$groupKey = $field['group']['name'];
				$groupLabel = $field['group']['label'];
				if (is_array($groups[$groupKey]) === FALSE) {
					$groups[$groupKey] = array(
						'name' => $groupKey,
						'label' => $groupLabel,
						'fields' => array()
					);
				}
				array_push($groups[$groupKey]['fields'], $field);
			}
			$flexformTemplateFile = t3lib_extMgm::extPath('fed', 'Resources/Private/Partials/AutoFlexForm.xml');
			$template = $this->objectManager->get('Tx_Fluid_View_StandaloneView');
			$template->setTemplatePathAndFilename($flexformTemplateFile);
			$template->setPartialRootPath($paths['partialRootPath']);
			$template->setLayoutRootPath($paths['layoutRootPath']);
			$template->assignMultiple($values);
			$template->assignMultiple($config);
			$template->assign('groups', $groups);
			$flexformXml = $template->render();
			$dataStructArray = t3lib_div::xml2array($flexformXml);
		} catch (Exception $e) {
			$dataStructArray = $onInvalid;
			unset($e);
		}
	}

}

?>