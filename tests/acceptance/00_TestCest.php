<?php
use \Step\Acceptance;

/**
 * @group test
 */
class TestCest
{
    /**
     * @param \Page\Cultivation $cultivationPage
     * @param AcceptanceTester $I
     * Login
     */


    function checkSuccessLogin (\Page\Cultivation $cultivationPage, \AcceptanceTester $I)
    {
        $cultivationPage->enterFields('vbuvac', 'Password1');
    }

    /**
     * @param \Page\Cultivation $cultivationPage
     * @param AcceptanceTester $I
     * Select Select Location
     */

    function selectLocation (\Page\Cultivation $cultivationPage, \AcceptanceTester $I)
    {
        $cultivationPage->selectionLocation('Grow 1','vbuvac');
    }

    /**
     * @param \Page\Cultivation $cultivationPage
     * @param AcceptanceTester $I
     * Navigate to Cultivation
     */

    function navigateToCultivation (\Page\Cultivation $cultivationPage, \AcceptanceTester $I)
    {
        $cultivationPage->cultivation();
    }

    /**
     * @param \Page\ProcessPlants $processPlantsPage
     * @param AcceptanceTester $I
     * Check the Button Cutting and Navigate and show the Table
     * @internal param \Page\ProcessPlants $cuttingPage
     */

    function clickOnProcessPlants (\Page\ProcessPlants $processPlantsPage, \AcceptanceTester $I){
        $processPlantsPage->clickProcessPlants();

    }

    function checkInvisibleBottoms (\Page\ProcessPlants $processPlantsPage, \Step\Acceptance\CultivationSteps $I){
        /**
         * Invisible Show,Scan Barcode and Show the Table
         */
        $processPlantsPage->checkInvisibleBottoms();
        $I->getShowPlant();
    }

    function selectFilter (\Page\ProcessPlants $processPlantsPage, \Step\Acceptance\CultivationSteps $I)
    {
        /**
         *  Show select room
         */
        $processPlantsPage->checkSelectFilter();
        $processPlantsPage->selectFilter('Clone');

        /**
         *  Show Action
         */

        $I->getShowActionTable();

        /**
         * Select Clone in the filter
         */

        $processPlantsPage->selectRoom('Clone Room');

    }



    function checkDestroy (\Page\ProcessPlants $processPlantsPage, \Step\Acceptance\CultivationSteps $I)
    {
        $processPlantsPage->checkDestroy();
    }
    



}

