<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%news}}`.
 */
class m220201_110904_create_news_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%news}}', [
            'id' => $this->primaryKey(),
            'title'=>$this->string(255)->notNull(),
            'text'=>$this->text()->notNull(),
            'image'=>$this->string(255)->notNull(),
            'category_id'=>$this->integer()->notNull(),
            'status'=>$this->tinyInteger(1)->defaultValue(1)->notNull(),
            'created_date'=>$this->dateTime()->notNull()
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%news}}');
    }
}
