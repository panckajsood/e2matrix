<?php

use yii\db\Migration;

class m170409_09226_alter_user_role2 extends Migration
{
    public function up()
    {
        $this->dropColumn('{{%user_role}}', 'user_id'); 
        $this->dropColumn('{{%user_role}}', 'user_role');
        $this->addColumn('{{%user_role}}', 'role', $this->integer()->notNull());
    }

    public function down()
    {
        echo "m170409_09226_alter_user_role2 cannot be reverted.\n";

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


