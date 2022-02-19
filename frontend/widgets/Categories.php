<?php


namespace frontend\widgets;


use common\models\NewsCategory;
use yii\base\Widget;

class Categories extends Widget
{
    public function run()
    {
        $models = NewsCategory::find()->where(['status'=>1])->limit(8)->all();

        return $this->render('categories',compact('models'));
    }
}