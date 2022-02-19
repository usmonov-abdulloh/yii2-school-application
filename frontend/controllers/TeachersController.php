<?php


namespace frontend\controllers;


use common\models\StaticFunctions;
use common\models\Teachers;
use yii\web\Controller;

class TeachersController extends Controller
{
    public function actionView($id)
    {
        $model = Teachers::findOne(['id'=>$id,'status'=>1]);
        $error = '404';
        if (!empty($model)){
            $image = StaticFunctions::getImage('teachers',$model->id,$model->image);
            return $this->render('view',compact('model','image'));
        }else{
            return $this->goBack();

        }

    }
}