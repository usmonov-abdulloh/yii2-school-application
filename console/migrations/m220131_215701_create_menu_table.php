<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%menu}}`.
 */
class m220131_215701_create_menu_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%menu}}', [
            'id' => $this->primaryKey(),
            'name'=>$this->string(255)->notNull(),
            'status'=>$this->integer(2)->null(),
            'parent_id'=>$this->integer()->null(),
            'order_by'=>$this->integer()->notNull(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%menu}}');
    }
}
