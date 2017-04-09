<?php

use yii\db\Migration;

class alter_user_table extends Migration
{
    public function up()
    {
        $this->addColumn('user', 'email', 'VARCHAR(255) AFTER username');
    }

    public function down()
    {
        $this->dropTable('{{%user}}');
    }
}

