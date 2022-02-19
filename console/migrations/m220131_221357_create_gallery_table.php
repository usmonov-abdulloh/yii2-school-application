<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%gallery}}`.
 */
class m220131_221357_create_gallery_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%gallery}}', [
            'id' => $this->primaryKey(),
            'title'=>$this->string(500)->notNull(),
            'created_date'=>$this->dateTime()->notNull(),
            'main_image'=>$this->string(255),
            'status'=>$this->tinyInteger(1)->defaultValue(1)->notNull(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%gallery}}');
    }
}
