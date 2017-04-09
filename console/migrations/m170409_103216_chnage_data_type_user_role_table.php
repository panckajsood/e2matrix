<?php

use yii\db\Migration;

class m170409_103216_chnage_data_type_user_role_table extends Migration
{
    
    public function up(){
        $this->alterColumn('{{%user_role}}', 'role', 'string');//varchar new_data_type
    }

    public function down() {
        $this->alterColumn('{{%user_role}}', 'role', 'int' );//int is old_data_type
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
