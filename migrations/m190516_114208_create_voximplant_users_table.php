<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%voximplant_users}}`.
 */
class m190516_114208_create_voximplant_users_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            // http://stackoverflow.com/questions/766809/whats-the-difference-between-utf8-general-ci-and-utf8-unicode-ci
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }
        $this->createTable('{{%voximplant_users}}', [
            'id' => $this->primaryKey(),
            'active'=>$this->boolean(),
            'user_id'=>$this->integer(),
            'account_id'=>$this->integer(),
            'api_key'=>$this->string(255),
            'login'=>$this->string(),
            'password'=>$this->string(),
        ],$tableOptions);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%voximplant_users}}');
    }
}
