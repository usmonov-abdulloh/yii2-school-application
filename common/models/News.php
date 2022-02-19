<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "news".
 *
 * @property int $id
 * @property string $title
 * @property string $text
 * @property string $image
 * @property int $category_id
 * @property int $status
 * @property string $created_date
 * @property string $description
 * @property int|null $count_view
 */
class News extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'news';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['title', 'text', 'category_id', 'created_date', 'description'], 'required'],
            [['text', 'description'], 'string'],
            [['category_id', 'status', 'count_view'], 'integer'],
            [['created_date'], 'safe'],
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
            'text' => Yii::t('app', 'Text'),
            'image' => Yii::t('app', 'Image'),
            'category_id' => Yii::t('app', 'Category ID'),
            'status' => Yii::t('app', 'Status'),
            'created_date' => Yii::t('app', 'Created Date'),
            'description' => Yii::t('app', 'Description'),
            'count_view' => Yii::t('app', 'Count View'),
        ];
    }
}
