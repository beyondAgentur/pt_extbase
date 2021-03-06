<?php
/***************************************************************
 *  Copyright notice
 *
 *  (c) 2010-2011 punkt.de GmbH - Karlsruhe, Germany - http://www.punkt.de
 *  Authors: Daniel Lienert, Michael Knoll
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
 * Unit test for abstract action controller
 * 
 * @author Michael Knoll 
 * @package Tests
 * @subpackage Controllers
 */
class Tx_PtExtbase_Tests_Unit_Controller_AbstractActionControllerTest extends Tx_PtExtbase_Tests_Unit_AbstractBaseTestcase
{
    /** @test */
    public function constructorReturnsControllerInstance()
    {
        $lifeCycleManagerMock = $this->getMock('Tx_PtExtbase_Lifecycle_Manager', array(), array(), '', false); /* @var $lifeCycleManagerMock Tx_PtExtbase_Lifecycle_Manager */
        $ptExtbaseAbstractActionController = new Tx_PtExtbase_Tests_Unit_Controller_AbstractActionControllerTest_ControllerMock($lifeCycleManagerMock);
        $this->assertTrue(is_a($ptExtbaseAbstractActionController, 'Tx_PtExtbase_Controller_AbstractActionController'));
    }
    
    
    /** @test */
    public function constructedControllerHoldsLifecycleManager()
    {
        $lifeCycleManagerMock = $this->getMock('Tx_PtExtbase_Lifecycle_Manager', array(), array(), '', false); /* @var $lifeCycleManagerMock Tx_PtExtbase_Lifecycle_Manager */
        $ptExtbaseAbstractActionController = new Tx_PtExtbase_Tests_Unit_Controller_AbstractActionControllerTest_ControllerMock($lifeCycleManagerMock);
        $this->assertTrue(is_a($ptExtbaseAbstractActionController->getLM(), 'Tx_PtExtbase_Lifecycle_Manager'));
    }
}

require_once \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extPath('pt_extbase').'Classes/Controller/AbstractActionController.php';

// Private class for testing abstract action controller
class Tx_PtExtbase_Tests_Unit_Controller_AbstractActionControllerTest_ControllerMock extends Tx_PtExtbase_Controller_AbstractActionController
{
    public function getLM()
    {
        return $this->lifecycleManager;
    }
}
