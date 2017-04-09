<?php

use yii\db\Migration;

/**
 * Handles the creation of table `user_role_map`.
 */
class m170409_100916_create_user_role_map_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('{{%user_role_map}}', [
            'id' => $this->primaryKey(),
            'user_id' => $this->integer()->notNull(),
            'user_role' => $this->integer()->notNull(),
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('{{%user_role_map}}');
    }
}
