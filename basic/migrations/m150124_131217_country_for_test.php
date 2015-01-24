<?php

use yii\db\Schema;
use yii\db\Migration;

class m150124_131217_country_for_test extends Migration
{
    public function up()
    {
        $this->createTable("country", [
            "code"          => "CHAR(2) NOT NULL PRIMARY KEY",
            "name"          => "CHAR(52) NOT NULL",
            "population"    => "INT(11) NOT NULL DEFAULT 0",
        ]);

        $this->db->createCommand()->batchInsert("country", ["code", "name", "population"], [
            ["RU", "Russia", 145000000],
            ["AU", "Australia", 18900000],
            ["BR", "Brazil", 170000000],
            ["CA", "Canada", 1150000],
            ["CN", "China", 1277558000],
            ["FR", "France", 59225700],
        ])->execute();
    }

    public function down()
    {
        $this->dropTable("country");
    }
}
