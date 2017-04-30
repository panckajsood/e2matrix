<?php

use yii\db\Migration;

class m170430_050741_subject_table extends Migration
{
    public function up()
    {
        $this->createTable('{{%subjects}}', [
            'id' => $this->primaryKey(),
            'subject' => $this->string()->notNull(),
        ]);
    }

    public function down()
    {
        echo "m170430_050741_subject_table cannot be reverted.\n";

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
