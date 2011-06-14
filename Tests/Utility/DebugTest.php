<?php
/***************************************************************
* Copyright notice
*
*   2010 Daniel Lienert <daniel@lienert.cc>, Michael Knoll <mimi@kaktusteam.de>
* All rights reserved
*
*
* This script is part of the TYPO3 project. The TYPO3 project is
* free software; you can redistribute it and/or modify
* it under the terms of the GNU General Public License as published by
* the Free Software Foundation; either version 2 of the License, or
* (at your option) any later version.
*
* The GNU General Public License can be found at
* http://www.gnu.org/copyleft/gpl.html.
*
* This script is distributed in the hope that it will be useful,
* but WITHOUT ANY WARRANTY; without even the implied warranty of
* MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
* GNU General Public License for more details.
*
* This copyright notice MUST APPEAR in all copies of the script!
***************************************************************/

/**
*
* @package Tests
* @subpackage Utility
* @author Daniel Lienert
*/

class Tx_PtExtbase_Tests_Utility_DebugTest extends Tx_PtExtbase_Tests_AbstractBaseTestcase {
	
	/** @test */
	public function debugObject() {
		$object = new debugTestClass();
		$object->init();
		
		Tx_PtExtbase_Utility_Debug::debug($object);
	}
	
}


class debugTestClass {
	
	public $publicProperty = 'publicVal';
	
	protected $protectedProperty = 'protectedVal';
	
	protected $circularDependency;
	
	private $privateProperty = 'privateVal';
	
	public function init() {
		$this->circularDependency = new self();
	}
}

?>