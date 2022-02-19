<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "classes".
 *
 * @property int $id
 * @property string $title
 * @property string $text
 * @property string|null $image
 * @property string $date
 * @property int $age
 * @property int $minSize
 * @property int $maxSize
 * @property string $duration
 * @property string $price
 */
class Classes extends \yii\db\ActiveRecord
{


    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'classes';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['title','duration','text','date','age','minSize','maxSize','price'], 'required'],
            [['text'], 'string'],
            [['date'], 'safe'],
            [['age', 'minSize', 'maxSize'], 'integer'],
            [['title', 'image', 'duration', 'price'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Sarlavha',
            'text' => 'Matn',
            'image' => 'Rasm',
            'date' => 'Sana',
            'age' => 'Yosh',
            'minSize' => 'Eng kamida nechta o\'quvchi bo\'ladi ?',
            'maxSize' => 'Eng ko\'pida nechta o\'quvchi bo\'ladi ?',
            'duration' => 'Kurs davomiyligi',
            'price' => 'Kurs narxi ',
        ];
    }
}
