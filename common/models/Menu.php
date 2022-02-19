<?php

namespace common\models;

use Yii;
use yii\db\ActiveRecord;

/**
 * This is the model class for table "menu".
 *
 * @property int $id
 * @property string $name
 * @property int|null $status
 * @property int|null $parent_id
 * @property int $order_by
 */
class Menu extends ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'menu';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'order_by'], 'required'],
            [['status', 'parent_id', 'order_by'], 'integer'],
            [['name'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Nomi',
            'status' => 'Status',
            'parent_id' => 'Parent ID',
            'order_by' => 'Tartibi',
        ];
    }

    public static function getChildElements($parent_id)
    {
        return self::find()->where(['parent_id'=>$parent_id,'status'=>1])->all();
    }
}
