<?php
$I = new ApiTester($scenario);
$I->wantTo("Request the Ney's albuns!");
$I->sendGET('/search', ['query' => 'ney matogrosso', 'type' => 'album']);
$I->seeResponseCodeIs(\Codeception\Util\HttpCode::OK); // 200
$I->seeResponseContains('"id" : "6QIgoxBzURhS6wNOTkxRfO"');