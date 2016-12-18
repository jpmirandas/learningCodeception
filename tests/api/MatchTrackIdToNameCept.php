<?php
use \Codeception\Util\HttpCode;

$I = new ApiTester($scenario);
$I->wantTo("Make sure this track ID points to Pink Floyd's Echoes");
$I->sendGET('/tracks/7kriFJLY2KOhw5en9iI2jb');
$I->seeResponseCodeIs(HttpCode::OK);
$I->seeResponseContainsJson(['name' => 'Echoes']);

$response = json_decode($I->grabResponse(), true);
// 20 min in millis
$duration = 20 * 60 * 1000;
$I->assertGreaterThan($duration, @$response['duration_ms'], "No, this isn't the prog song you wanted");
