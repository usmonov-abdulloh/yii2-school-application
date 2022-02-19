<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "teachers".
 *
 * @property int $id
 * @property string $name
 * @property string $job
 * @property string $description
 * @property int $status
 * @property string|null $image
 */
class Teachers extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'teachers';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'job', 'description'], 'required'],
            [['description'], 'string'],
            [['status'], 'integer'],
            [['name', 'job', 'image'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'job' => 'Job',
            'description' => 'Description',
            'status' => 'Status',
            'image' => 'Image',
        ];
    }
}
