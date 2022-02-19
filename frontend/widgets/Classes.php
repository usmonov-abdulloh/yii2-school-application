<?php


namespace frontend\widgets;


use yii\base\Widget;


class Classes extends Widget
{
    public function run()
    {
        $models = \common\models\Classes::find()->all();
        return $this->render('classes',compact('models'));
    }
}