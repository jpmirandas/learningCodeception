<?php 
    $I = new AcceptanceTester($scenario);
    $I->wantTo('ensure that frontpage works');
    $I->amOnPage('/');
    $I->see('Google');
    $I->click('Estou com sorte');
    $I->makeScreenshot('screen');
    $I->seeInCurrentUrl('doodles');
?>