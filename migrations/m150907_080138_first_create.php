<?php

use yii\db\Schema;
use yii\db\Migration;

class m150907_080138_first_create extends Migration
{
    public function down()
    {
        echo "m150907_080138_first_create cannot be reverted.\n";

        return false;
    }

    // Use safeUp/safeDown to run migration code within a transaction
    public function safeUp()
    {
        $this->createTable('news', [
            'id' => 'pk',
            'title' => Schema::TYPE_STRING . ' NOT NULL',
            'content' => Schema::TYPE_TEXT,
        ]);

        $this->createTable('sub_user', [
            'id' => 'pk',
            'username' => Schema::TYPE_STRING . ' NOT NULL',
            'email' => Schema::TYPE_TEXT,
            'auth_key' => Schema::TYPE_TEXT,
            'password' => Schema::TYPE_TEXT,
        ]);

        $this->createTable('admin_user', [
            'id' => 'pk',
            'username' => Schema::TYPE_STRING . ' NOT NULL',
            'email' => Schema::TYPE_TEXT,
            'auth_key' => Schema::TYPE_TEXT,
            'password' => Schema::TYPE_TEXT,
        ]);
          $this->createTable('post', [
            'id' => 'pk',
            'post_code' => Schema::TYPE_STRING . ' NOT NULL',
            'image' => Schema::TYPE_TEXT,
            'title' => Schema::TYPE_TEXT,
            'body' => Schema::TYPE_TEXT,
            'url' => Schema::TYPE_TEXT,
            'publish_start' => Schema::TYPE_DATETIME,
            'publish_end' => Schema::TYPE_DATETIME,
            'publish_visible' => Schema::TYPE_DATETIME,
        ]);
    }

    /*
    public function safeDown()
    {
    }
    */
}
