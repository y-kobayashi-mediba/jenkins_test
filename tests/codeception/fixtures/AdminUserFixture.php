<?php
namespace tests\codeception\fixtures;

use yii\test\ActiveFixture;

class AdminUserFixture extends ActiveFixture
{
    public $modelClass = 'app\models\AdminUser';
    //public $depends = ['tests\codeception\fixtures\SubUserFixture'];
}   