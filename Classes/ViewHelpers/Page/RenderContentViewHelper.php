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
 * ************************************************************* */

/**
 * ViewHelper used to render content elements in Fluid page templates
 *
 * @author Claus Due, Wildside A/S
 * @package Fed
 * @subpackage ViewHelpers/Page
 */
class Tx_Fed_ViewHelpers_Page_RenderContentViewHelper extends Tx_Fed_Core_ViewHelper_AbstractViewHelper {

	/**
	 * Initialize
	 */
	public function initializeArguments() {
		$this->registerArgument('column', 'integer', 'Name of the column to render', FALSE, 0);
		$this->registerArgument('as', 'string', 'If specified, adds template variable and assumes you manually iterate through {content}');
		$this->registerArgument('limit', 'integer', 'Optional limit to the number of content elements to render');
		$this->registerArgument('order', 'string', 'Optional sort field of content elements - RAND() supported', FALSE, 'sorting');
		$this->registerArgument('sortDirection', 'string', 'Optional sort direction of content elements', FALSE, 'ASC');
		$this->registerArgument('pageUid', 'integer', 'If set, gets content from this page');
		$this->registerArgument('slide', 'integer', 'Enables Content Sliding - amount of levels which shall get walked up the rootline. For infinite sliding (till the rootpage) set to -1)', FALSE, 0);
		$this->registerArgument('slideCollect', 'integer', 'Enables collecting of Content Elements - amount of levels which shall get walked up the rootline. For infinite sliding (till the rootpage) set to -1 (lesser value for slide and slide.collect applies))', FALSE, 0);
		$this->registerArgument('slideCollectReverse', 'boolean', 'Normally when collecting content elements the elements from the actual page get shown on the top and those from the parent pages below those. You can invert this behaviour (actual page elements at bottom) by setting this flag))', FALSE, 0);
	}

	/**
	 * Render method
	 *
	 * @return string
	 */
	public function render() {
		if (TYPO3_MODE == 'BE') {
			return '';
		}
		$content = $this->getContentRecords();
		if ($this->arguments['as']) {
			$this->templateVariableContainer->add($this->arguments['as'], $content);
			$html = $this->renderChildren();
			$this->templateVariableContainer->remove($this->arguments['as']);
		} else {
			$html = "";
			foreach ($content as $contentRecord) {
				$html .= $contentRecord . LF;
			}
		}
		return $html;
	}

	/**
	 * Get content records based on column and pid
	 *
	 * @author Claus Due, Wildside A/S
	 * @author Daniel SchÃ¶ne, schoene.it (added "slide" feature)
	 * @return array
	 */
	protected function getContentRecords() {
		$pid = $this->arguments['pageUid'] ? $this->arguments['pageUid'] : $GLOBALS['TSFE']->id;
		$order = $this->arguments['order'] . ' ' . $this->arguments['sortDirection'];
		$colPos = $this->arguments['column'];
		$slide = $this->arguments['slide'] ? $this->arguments['slide'] : FALSE;
		$slideCollect = $this->arguments['slideCollect'] ? $this->arguments['slideCollect'] : FALSE;
		if($slideCollect !== FALSE){
			$slide = min($slide, $slideCollect);
		}
		$slideCollectReverse = $this->arguments['slideCollectReverse'];
		$rootLine = NULL;
		if($slide){
			$pageSelect = new t3lib_pageSelect();
			$rootLine = $pageSelect->getRootLine($pid);
			if($slideCollectReverse){
				$rootLine = array_reverse($rootLine);
			}
		}

		$content = array();
		do {
			if ($slide){
				$page = array_shift($rootLine);
				if (!$page){
					break;
				}
				$pid = $page['uid'];
			}
			$conditions = "pid = '" . $pid ."' AND colPos = '" . $colPos . "' AND tx_fed_fcecontentarea = '' AND deleted = '0' AND hidden = '0' AND (sys_language_uid IN (-1,0) OR (sys_language_uid = '" . $GLOBALS['TSFE']->sys_language_uid . "' AND l18n_parent = '0'))";
			$res = $GLOBALS['TYPO3_DB']->exec_SELECTquery('uid', 'tt_content', $conditions, 'uid', $order, $this->arguments['limit']);
			while ($row = $GLOBALS['TYPO3_DB']->sql_fetch_assoc($res)) {
				$conf = array(
					'tables' => 'tt_content',
					'source' => $row['uid'],
					'dontCheckPid' => 0
				);
				array_push($content, $GLOBALS['TSFE']->cObj->RECORDS($conf));
			}
			$GLOBALS['TYPO3_DB']->sql_free_result($res);
			if (count($content) && !$slideCollect){
				break;
			}
		} while($slide !== FALSE && --$slide !== -1);

		return $content;
	}

}

?>
