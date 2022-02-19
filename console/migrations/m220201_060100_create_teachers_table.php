<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%teachers}}`.
 */
class m220201_060100_create_teachers_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%teachers}}', [
            'id' => $this->primaryKey(),
            'name'=>$this->string(255)->notNull(),
            'job'=>$this->string(255)->notNull(),
            'description'=>$this->text()->notNull(),
            'status'=>$this->tinyInteger(1)->defaultValue(1)->notNull(),
            'image'=>$this->string(255)
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%teachers}}');
    }
}
