<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%testimonials}}`.
 */
class m220131_222902_create_testimonials_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%testimonials}}', [
            'id' => $this->primaryKey(),
            'user_id'=>$this->integer()->notNull(),
            'rating'=>$this->integer(1)->notNull(),
            'text'=>$this->text()->notNull(),
            'status'=>$this->tinyInteger(1)->defaultValue(0)->notNull(),
            'created_date'=>$this->dateTime()->notNull()
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%testimonials}}');
    }
}
