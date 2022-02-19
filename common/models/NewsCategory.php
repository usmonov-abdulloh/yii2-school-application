<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "news_category".
 *
 * @property int $id
 * @property string $title
 * @property int $status
 * @property string $image
 */
class NewsCategory extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'news_category';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['title'], 'required'],
            [['status'], 'integer'],
            [['title', 'image'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'title' => Yii::t('app', 'Title'),
            'status' => Yii::t('app', 'Status'),
            'image' => Yii::t('app', 'Image'),
        ];
    }
}
