<?php
use Step\Acceptance;
/**
 * @group 2_cultivation
 */
class CultivationCest
{

    function checkSuccessLogin (\Page\Cultivation $cultivationPage, \AcceptanceTester $I)
    {
        $cultivationPage->enterFields('vbuvac', 'Password1');
    }
    function selectLocation (\Page\Cultivation $cultivationPage, \AcceptanceTester $I)
    {
        $cultivationPage->selectionLocation('Grow 1','vbuvac');
    }
    function navigateToCultivation (\Page\Cultivation $cultivationPage, \AcceptanceTester $I)
    {
        $cultivationPage->cultivation();
    }

    function clickSave (\Page\Cultivation $cultivationPage, \AcceptanceTester $I)
    {
        $cultivationPage->clickSave();
    }

    function checkValidationFields (\Page\Cultivation $cultivationPage, \AcceptanceTester $I)
    {
        $cultivationPage->checkValidationFields();
    }

    function selectOrderDate (\Page\Cultivation $cultivationPage, \AcceptanceTester $I)
    {
        $cultivationPage->selectOrderDate('08-03-2020');
    }

    function enterManualDate (\Page\Cultivation $cultivationPage, \AcceptanceTester $I)
    {
        $cultivationPage->enterManualDate('06-12-2016');
    }

    function selectAssigned (\Page\Cultivation $cultivationPage, \AcceptanceTester $I)
    {
        $cultivationPage->selectAssigned('Vanya Buvac');
    }

    function selectSubLocation (\Page\Cultivation $cultivationPage, \AcceptanceTester $I)
    {
        $cultivationPage->selectSubLocation('Clone Room');
    }

    function selectPlantOrigin (\Page\Cultivation $cultivationPage, \AcceptanceTester $I)
    {
        $cultivationPage->selectPlantOrigin('Seed');
    }

    function selectPlantOriginBatch (\Page\Cultivation $cultivationPage, \AcceptanceTester $I)
    {
        $cultivationPage->selectPlantOriginBatch('BM0');
    }


    function checkInvalidDate (\Page\Cultivation $cultivationPage, \AcceptanceTester $I)
    {
        $cultivationPage->checkInvalidDate();
    }

    function addProdNameAndQuality (\Page\Cultivation $cultivationPage, \AcceptanceTester $I)
    {
        $cultivationPage->addProdNameAndQuality('White Widow', '100');
    }

    function clickSaveOrder (\Page\Cultivation $cultivationPage, \AcceptanceTester $I)
    {
        $cultivationPage->clickSaveOrder();

    }

    function checkOrderList (\Page\Cultivation $cultivationPage, \AcceptanceTester $I)
    {
        $cultivationPage->checkOrderList('Vanya Buvac','Vanya Buvac','06-12-2016','100');

    }









}
