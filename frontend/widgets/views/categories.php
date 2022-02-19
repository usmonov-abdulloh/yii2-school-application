<?php
use common\models\News;
use yii\helpers\Url;

?>


<div class="single-widgets widget_category ">
    <h4>Categories</h4>
    <ul class="categories">
        <?php

        if (!empty($models)):?>
                <?php foreach ($models as $model):?>
                <?php $news = News::find()->where(['category_id'=>$model->id])->all(); ?>
                    <?php if (count($news)>0):?>
                        <li><a href="<?=Url::to(['/category/view','id'=>$model->id])?>"><?=$model->title?> (<?=count($news)?>)</a></li>
                    <?php endif;?>
                <?php endforeach;?>
        <?php endif;?>
    </ul>
</div>
