<?php

use yii\db\Migration;

class m170415_030115_user_field extends Migration
{
    public function up()
    {
        $this->createTable('{{%fields}}', [

            'field_id' => $this->primaryKey()->notNull(),
            'field_name' => $this->string(100)->notNull(),
            'field_slug' => $this->string(100)->notNull(),
            'field_type' => $this->string(100)->notNull(),
            'is_searchable' => $this->boolean()->notNull(),
            'is_required' => $this->boolean()->notNull(),
            'category_id' => $this->integer(11)->notNull(),
            'group_id' => $this->integer(11)->notNull(),
            'is_active' => $this->boolean()->notNull()->defaultValue(1),
            'createdby' => $this->integer(11)->notNull(),
            'createddate' => $this->datetime()->notNull(),
            'updatedby' => $this->integer(11),
            'updateddate' => $this->datetime(),

        ]);
    }

    public function down()
    {
        $this->dropTable('{{%fields}}');
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
