<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%classes}}`.
 */
class m220201_061309_create_classes_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%classes}}', [
            'id' => $this->primaryKey(),
            'title'=>$this->string(255)->notNull(),
            'text'=>$this->text()->notNull(),
            'image'=>$this->string(255),
            'date'=>$this->dateTime()->notNull(),
            'age'=>$this->integer()->notNull(),
            'minSize'=>$this->integer()->notNull(),
            'maxSize'=>$this->integer()->notNull(),
            'duration'=>$this->string()->notNull(),
            'price'=>$this->string()->notNull()
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%classes}}');
    }
}
