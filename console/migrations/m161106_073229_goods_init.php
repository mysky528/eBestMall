<?php

use yii\db\Migration;

class m161106_073229_goods_init extends Migration
{
    const TBL_NAME = '{{%goods}}';

    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            // http://stackoverflow.com/questions/766809/whats-the-difference-between-utf8-general-ci-and-utf8-unicode-ci
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable(self::TBL_NAME, [
            'goods_id' => $this->bigPrimaryKey()->unsigned(),
            'create_id' => $this->bigInteger()->unsigned()->notNull()->defaultValue('0'),
            'title' => $this->string(200)->notNull()->defaultValue(''),
            'descr' => $this->text(),
            'num' => $this->bigInteger()->unsigned()->notNull()->defaultValue('0'),
            'price' => $this->decimal(10,2)->notNull()->defaultValue('0.00'),
            'cover' => $this->string(200)->notNull()->defaultValue(''),
            'pics' => $this->text(),
            'is_sale' => $this->smallInteger()->unsigned()->notNull()->defaultValue('0'),
            'sale_price' => $this->decimal(10,2)->notNull()->defaultValue('0.00'),
            'is_hot' => $this->smallInteger()->unsigned()->notNull()->defaultValue('0'),
            'create_time' => $this->integer()->unsigned()->notNull()->defaultValue('0'),

            'KEY '. self::TBL_NAME .' (create_id)'
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
