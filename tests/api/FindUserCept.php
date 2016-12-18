<?php
use \Codeception\Util\HttpCode;

$I = new ApiTester($scenario);
$I->wantTo("Find @mstred's Spotify profile");
$I->sendGET('/users/samuedson');
$I->seeResponseCodeIs(HttpCode::OK);
$I->seeResponseContainsJson(['id' => 'samuedson']);
