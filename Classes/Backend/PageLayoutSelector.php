<?php
/***************************************************************
*  Copyright notice
*
*  (c) 2011 Claus Due <claus@wildside.dk>, Wildside A/S
*  All rights reserved
*
*  This script is part of the TYPO3 project. The TYPO3 project is
*  free software; you can redistribute it and/or modify
*  it under the terms of the GNU General Public License as published by
*  the Free Software Foundation; either version 2 of the License, or
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
 * Class that renders a hidden field for TCE
 *
 * @package	TYPO3
 * @subpackage	fed
 */
class Tx_Fed_Backend_PageLayoutSelector {

	protected $recognizedFormats = array('html', 'xml', 'txt', 'json', 'js', 'css');

	public function renderField(&$parameters, &$pObj) {
		$name = $parameters['itemFormElName'];
		$value = $parameters['itemFormElValue'];
		$format = 'html';
		$availableTemplates = $this->getAvailablePageTemplates($format);
		$selector = '<select name="' . $name . '" class="formField select">' . chr(10);
		foreach ($availableTemplates as $extension=>$group) {
			$selector .= '<optgroup label="Extension: ' . $extension . '">' . chr(10);
			foreach ($group as $template) {
				$optionValue = $extension . '->' . $template;
				$selected = ($optionValue == $value ? ' selected="formField selected"' : '');
				$option = '<option value="' . $optionValue . '"' . $selected . '>' . $optionValue . '</option>';
				$selector .= $option . chr(10);
			}
			$selector .= '</optgroup>' . chr(10);
		}
		$selector .= '</select>' . chr(10);
		return $selector;
	}

	public function renderFormatField(&$parameters, &$pObj) {
		$name = $parameters['itemFormElName'];
		$value = $parameters['itemFormElValue'];
		$selector = '<select name="' . $name . '" class="formField select"
			onchange="if (confirm(TBE_EDITOR.labels.onChangeAlert) && TBE_EDITOR.checkSubmit(-1)){ TBE_EDITOR.submitForm() };">' . chr(10);
		$availableFormats = $this->getAvailablePageFormats();
		foreach ($availableFormats as $format) {
			$format = strtoupper($format);
			$selected = ($format == $value ? ' selected="selected"' : '');
			$option = '<option value="' . $format . '"' . $selected . '>' . $format . '</option>';
			$selector .= $option . chr(10);
		}
		$selector .= '</select>' . chr(10);
		return $selector;
	}

	protected function getAvailablePageFormats() {
		$typoscript = $this->getTyposcript();
		$path = $typoscript['templateRootPath'] . 'Page/';
		$path = $this->translatePath($path);
		$formats = array();
		$dir = PATH_site . $path;
		$files = scandir($dir);
		foreach ($files as $k=>$file) {
			$pathinfo = pathinfo($dir . $file);
			$extension = $pathinfo['extension'];
			if (in_array($extension, $this->recognizedFormats)) {
				$formats[$extension] = $extension;
			}
		}
		return $formats;
	}

	protected function getAvailablePageTemplates($format) {
		$typoscript = $this->getTyposcript();
		$output = array();
		foreach ($typoscript as $extensionName=>$group) {
			$path = $group['templateRootPath'] . 'Page/';
			$path = $this->translatePath($path);
			$dir = PATH_site . $path;
			$files = scandir($dir);
			$output[$extensionName] = array();
			foreach ($files as $k=>$file) {
				$pathinfo = pathinfo($dir . $file);
				$extension = $pathinfo['extension'];
				if (substr($file, 0, 1) === '.') {
					unset($files[$k]);
				} else if (strtolower($extension) != strtolower($format)) {
					unset($files[$k]);
				} else {
					$output[$extensionName][] = $pathinfo['filename'];
				}
			}
		}
		return $output;
	}

	protected function translatePath($path) {
		if (strpos($path, 'EXT:') === 0) {
			$slice = strpos($path, '/');
			$extKey = array_pop(explode(':', substr($path, 0, $slice)));
			$path = t3lib_extMgm::siteRelPath($extKey) . substr($path, $slice);
		}
		return $path;
	}

	protected function getTyposcript() {
		$objectManager = t3lib_div::makeInstance('Tx_Extbase_Object_ObjectManager');
		$configManager = $objectManager->get('Tx_Extbase_Configuration_BackendConfigurationManager');
		$config = $configManager->getTyposcriptSetup();
		$config = Tx_Extbase_Utility_TypoScript::convertTypoScriptArrayToPlainArray($config);
		$typoscript = $config['plugin']['tx_fed']['page'];
		return $typoscript;
	}

}
?>