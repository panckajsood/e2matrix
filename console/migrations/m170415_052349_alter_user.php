<?php

use yii\db\Migration;

class m170415_052349_alter_user extends Migration
{
    public function up()
    {
        $this->addColumn('{{%user}}', 'first_name',$this->string());
        $this->addColumn('{{%user}}', 'middle_name',$this->string());
        $this->addColumn('{{%user}}', 'last_name',$this->string());
    }

    public function down()
    {
        echo "m170415_052349_alter_user cannot be reverted.\n";

        return false;
    }

    /*
    // Use safeUp/safeDown to run migration code within a transaction
    public function safeUp()
    {
    }

    public function safeDown()
    {
    }
    */
}
