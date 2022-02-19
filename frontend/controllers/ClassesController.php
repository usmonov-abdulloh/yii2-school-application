<?php


namespace frontend\controllers;


use common\models\Classes;
use yii\web\Controller;

class ClassesController extends Controller
{
    public function actionView($id)
    {
        $model = Classes::findOne(['id'=>$id]);
        return $this->render('view',compact('model'));
        

    }

}

