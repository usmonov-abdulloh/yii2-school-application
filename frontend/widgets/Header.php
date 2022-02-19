<?php

namespace frontend\widgets;
use common\models\Menu;
use yii\bootstrap4\Widget;

class Header extends Widget
{
    public function run()
    {
        $menus = Menu::find()->where(['parent_id'=> null])->all();
        return $this->render('header',compact('menus'));
    }
}