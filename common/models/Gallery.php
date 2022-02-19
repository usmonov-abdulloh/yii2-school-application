<?php

namespace common\models;

use Yii;
use yii\db\ActiveRecord;

/**
 * This is the model class for table "gallery".
 *
 * @property int $id
 * @property string $title
 * @property string $created_date
 * @property string|null $main_image
 * @property int $status
 */
class Gallery extends ActiveRecord
{

    public $imageFile;
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'gallery';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['title'], 'required'],
            [['created_date'], 'safe'],
            [['status'], 'integer'],
            [['title'], 'string', 'max' => 500],
            [['main_image'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Title',
            'created_date' => 'Vaqt',
            'main_image' => 'Main Image',
            'status' => 'Status',
        ];
    }
}
