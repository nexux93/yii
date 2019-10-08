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
        $this->createTable('yii2user', [
            'user_id' => $this->primaryKey(),
            'user_name' => $this->string()->notNull(),
            'password_hash' => $this->string()->notNull(),
            'auth_key' => $this->string()->notNull(),
            'access_token' => $this->string()->notNull(),
            'quest' => $this->string(),
            'created_at' => $this->integer(),
            'updated_at' => $this->integer()
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
