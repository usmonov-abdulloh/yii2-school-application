<?php


namespace frontend\widgets;


use common\models\News;
use yii\base\Widget;

class Blog extends Widget
{
    public function run()
    {
        $news = News::find()->where(['status'=>1])->limit(3)->all();
        return $this->render('blog',compact('news'));
    }
}