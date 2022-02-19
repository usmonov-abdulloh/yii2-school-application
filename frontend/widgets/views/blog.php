<?php
use common\models\StaticFunctions;
use yii\helpers\Url;
?>
<?php if (!empty($news)):?>
    <div class="blog-wrap flight-wrap ">
        <div class="container">
            <div class="title">
                <h1> Our Blog </h1>
            </div>
            <ul class="row unorderList justify-content-center">
                <?php foreach ($news as $item):?>
                    <?php $image=StaticFunctions::getImage('news',$item->id,$item->image)?>
                    <li class="col-lg-4">
                        <div class="blog_box">
                            <div class="blogImg"><img src="<?=$image?>" alt="">
                                <div class="time_box"><span><?=date('d.m.Y',strtotime($item->created_date))?></span></div>
                            </div>
                            <div class="path_box">
                                <h3><a href="<?=Url::to(['/news/view','id'=>$item->id])?>"><?=$item->title?></a></h3>
                                <p><?=StaticFunctions::getShortDescription($item->text)?></p>
                            </div>
                        </div>
                    </li>
                <?php endforeach;?>

            </ul>
        </div>
    </div>



<?php endif;?>
