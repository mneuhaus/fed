<?php
/***************************************************************
 *  Copyright notice
 *
 *  (c) 2012 Claus Due <claus@wildside.dk>, Wildside A/S
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
 * Interface for AssetManager
 *
 * @package Fed
 * @subpackage Asset
 */
interface Tx_Fed_Asset_AssetManagerInterface extends t3lib_Singleton {

	/**
	 * @param Tx_Fed_Asset_AssetInterface $asset
	 * @return void
	 */
	public function add(Tx_Fed_Asset_AssetInterface $asset);

	/**
	 * @return mixed
	 */
	public function buildPageHeaderCodeForAssets();

	/**
	 * @return mixed
	 */
	public function buildPageFooterCodeForAssets();

	/**
	 * @return array<Tx_Fed_Asset_AssetInterface>
	 */
	public function getSortedAssets();

}
