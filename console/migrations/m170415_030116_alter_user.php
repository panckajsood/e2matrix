
<?php

use yii\db\Migration;

class m170415_030116_alter_user extends Migration
{
    public function up()
    {
        $this->addColumn('{{%user}}', 'gender', $this->char(1));
        $this->addColumn('{{%user}}', 'dob', $this->date()->notNull());
        
        
    }

    public function down()
    {
        echo "m170415_030116_alter_user cannot be reverted.\n";

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
