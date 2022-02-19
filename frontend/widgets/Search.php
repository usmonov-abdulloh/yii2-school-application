<?php


namespace frontend\widgets;


use yii\base\Widget;

class Search extends Widget
{
    public function run()
    {
        return $this->render('search');
    }
}