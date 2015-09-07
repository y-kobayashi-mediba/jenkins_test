<?php
$I = new ApiTester($scenario);
$I->wantTo('create a API Test');
$I->sendPOST('/?r=site%2Fapi-test', ['name' => 'davert', 'email' => 'davert@codeception.com']);
$I->seeResponseCodeIs("200");
$I->seeResponseIsJson();
$I->seeResponseContains('{"result":"true"}');
