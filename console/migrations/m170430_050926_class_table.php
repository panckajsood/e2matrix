<?php

use yii\db\Migration;

class m170430_050926_class_table extends Migration
{
    public function up()
    {
       $this->createTable('{{%class}}', [
            'id' => $this->primaryKey(),
            'class' => $this->string()->notNull(),
        ]);
    }

    public function down()
    {
        echo "m170430_050926_class_table cannot be reverted.\n";

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
