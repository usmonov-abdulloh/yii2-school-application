<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%images}}`.
 */
class m220131_221840_create_images_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%images}}', [
            'id' => $this->primaryKey(),
            'image'=>$this->string(255)->notNull(),
            'gallery_id'=>$this->integer()->notNull()
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%images}}');
    }
}
