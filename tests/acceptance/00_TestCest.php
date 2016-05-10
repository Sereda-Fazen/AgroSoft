<?php
use \Step\Acceptance;

/**
 * @group test
 */
class TestCest
{

    function checkSuccessLogin (\Page\Cultivation $cultivationPage, \AcceptanceTester $I)
    {
        $cultivationPage->enterFields('vbuvac', 'Password1');
    }
    function selectLocation (\Page\Cultivation $cultivationPage, \AcceptanceTester $I)
    {
        $cultivationPage->selectionLocation();
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

    





}

