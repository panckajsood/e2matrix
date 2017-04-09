<?php

use yii\db\Migration;

class m170409_092526_add_email_column_phn_no_to_user_table extends Migration
{
    public function up()
    {
        $this->addColumn('{{%user}}', 'phone_no', 'int(10) AFTER username'); 
    }

    public function down()
    {
        echo "m170409_092526_add_email_column_phn_no_to_user_table cannot be reverted.\n";

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
