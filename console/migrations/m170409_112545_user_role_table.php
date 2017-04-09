<?php

use yii\db\Migration;

class m170409_112545_user_role_table extends Migration
{
public function up()
    {
        $this->createTable('{{%user_role}}', [
            'id' => $this->primaryKey(),
            'role' => $this->string()->notNull(),
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('{{%user_role}}');
    }
}
