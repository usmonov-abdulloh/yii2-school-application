<?php


namespace frontend\controllers;


use common\models\News;
use common\models\NewsCategory;
use yii\data\Pagination;
use yii\web\Controller;

class CategoryController extends Controller
{
    public function actionView($id)
    {
        $model1 = NewsCategory::findOne($id);
        $models = News::find()->where(['status'=>1,'category_id'=>$id])->all();
        $pagination = new Pagination([
            'totalCount'=>count($models),
            'pageSize'=>1,
        ]);
        return $this->render('view',compact('models','pagination'));
    }
}