<?php

use yii\db\Migration;

class m161103_084804_menu_init extends Migration
{
    const TBL_NAME = '{{%menu}}';

    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            // http://stackoverflow.com/questions/766809/whats-the-difference-between-utf8-general-ci-and-utf8-unicode-ci
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable(self::TBL_NAME, [
            'id' => $this->primaryKey(),
            'name' => $this->string()->notNull(),
            'parent' => $this->integer()->null(),
            'route' => $this->string()->null(),
            'order' => $this->integer()->null(),
            'data' => $this->text()->null(),
            'FOREIGN KEY (parent) REFERENCES '. self::TBL_NAME .' (id) ON DELETE CASCADE ON UPDATE CASCADE'
        ], $tableOptions);
    }

    public function down()
    {
        $this->dropTable(self::TBL_NAME);
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
