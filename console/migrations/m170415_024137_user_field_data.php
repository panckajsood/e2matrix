<?php

use yii\db\Migration;

class m170415_024137_user_field_data extends Migration
{
    public function up()
    {
        $this->createTable('{{%user_fields_data}}', [

            'user_fields_data_id' => $this->primaryKey()->notNull(),
            'field_id' => $this->integer(11)->notNull(),
            'user_id' => $this->integer(11)->notNull(),
            'field_value' => $this->text()->notNull(),
            'is_active' => $this->boolean()->notNull()->defaultValue(1),
            'createdby' => $this->integer(11)->notNull(),
            'createddate' => $this->datetime()->notNull(),
            'updatedby' => $this->integer(11),
            'updateddate' => $this->datetime(),

        ]);
    }

    public function down()
    {
        $this->dropTable('{{%user_fields_data}}');
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
