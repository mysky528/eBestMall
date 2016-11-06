<?php

use yii\db\Migration;

class m161105_200343_category_init extends Migration
{
    const TBL_NAME = '{{%category}}';

    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            // http://stackoverflow.com/questions/766809/whats-the-difference-between-utf8-general-ci-and-utf8-unicode-ci
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable(self::TBL_NAME, [
            'cate_id' => $this->bigPrimaryKey()->unsigned(),
            'title' => $this->string(32)->notNull()->defaultValue(''),
            'parent_id' => $this->bigInteger()->unsigned()->notNull()->defaultValue('0'),
            'create_time' => $this->integer()->unsigned()->notNull()->defaultValue('0'),

            'KEY '. self::TBL_NAME .' (parent_id)'
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
