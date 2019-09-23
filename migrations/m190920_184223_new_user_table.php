<?php

use yii\db\Migration;
use yii\db\Schema;

/**
 * Class m190920_184223_new_user_table
 */
class m190920_184223_new_user_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('user', [
            'id' => Schema::TYPE_PK,
            'username' => Schema::TYPE_CHAR,
            'password' => Schema::TYPE_CHAR,
            'authKey' => Schema::TYPE_CHAR,
            'accessToken' => Schema::TYPE_CHAR,
            'quest' => Schema::TYPE_INTEGER
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('user');

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m190920_184223_new_user_table cannot be reverted.\n";

        return false;
    }
    */
}
