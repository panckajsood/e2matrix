<?php

use yii\db\Migration;

class m170430_025935_add_joining_date_into_user extends Migration
{
    public function up()
    {
       $this->addColumn('{{%user}}', 'joining_date', $this->date());
    }

    public function down()
    {
        echo "m170430_025935_add_joining_date_into_user cannot be reverted.\n";

        return false;
    }

   
}
