<?php

use yii\db\Schema;
use yii\db\Migration;

class m150124_151350_guestbook extends Migration
{
    public function up()
    {
        $this->createTable("guestbook_entry", [
            "id"        => "pk",
            "email"     => "varchar(50) NOT NULL",
            "name"      => "varchar(50) NOT NULL",
            "message"   => Schema::TYPE_TEXT . " NOT NULL",
        ]);
    }

    public function down()
    {
        $this->dropTable("guestbook_entry");
    }
}
