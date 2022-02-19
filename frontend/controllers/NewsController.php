<?php


namespace frontend\controllers;


use common\models\News;
use yii\web\Controller;

class NewsController extends Controller
{
    public function actionView($id)
    {
        $model = News::findOne(['id'=>$id,'status'=>1]);
        if (!empty($model)) {
            return $this->render('view',compact('model'));
        }else{
            return $this->goHome();
        }
    }
}