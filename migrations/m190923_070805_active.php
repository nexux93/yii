<?php

use yii\db\Migration;
use yii\db\Schema;

/**
 * Class m190923_070805_active
 */
class m190923_070805_active extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('yii2active', [
            'activeId' => Schema::TYPE_SMALLINT,
            'title' => Schema::TYPE_CHAR,
            'startDay' => Schema::TYPE_DATE,
            'endDay' => Schema::TYPE_DATE,
            'userId' => Schema::TYPE_SMALLINT,
            'description' => Schema::TYPE_CHAR,
            'email' => Schema::TYPE_CHAR,
            'repeat' => Schema::TYPE_BOOLEAN,
            'blocked' => Schema::TYPE_BOOLEAN
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('active');
        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m190923_070805_active cannot be reverted.\n";

        return false;
    }
    */
}
