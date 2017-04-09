<?php

use yii\db\Migration;

class m170409_102916_alter_user_role_table extends Migration
{
    public function up()
    {
        $this->dropColumn('{{%user_role}}', 'user_id'); 
        $this->dropColumn('{{%user_role}}', 'user_role');
        $this->addColumn('{{%user_role}}', 'role', $this->integer()->notNull());
    }

    public function down()
    {
        echo "m170409_102916_alter_user_role_table cannot be reverted.\n";

        return false;
    }

}


