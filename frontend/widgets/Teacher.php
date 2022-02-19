<?php


namespace frontend\widgets;


use common\models\Teachers;
use yii\base\Widget;

class Teacher extends Widget
{
    public function run()
    {
        $teachers = Teachers::find()->all();
        return $this->render('teachers',compact('teachers'));
    }
}