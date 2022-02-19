<?php use common\models\StaticFunctions;
use yii\helpers\Url;

if (!empty($models)):?>

    <!-- Classes Start -->
    <div class="class-wrap">
        <div class="container">
            <div class="title">
                <h1> Our Popular Classes </h1>
            </div>
            <ul class="owl-carousel">

                <?php foreach ($models as $model):?>
                <?php $image = StaticFunctions::getImage('classes',$model->id,$model->image)?>
                    <li class="item">
                        <div class="class_box">
                            <div class="class_Img"><img src="<?=$image?>" width="100px" alt="">
                            </div>
                            <div class="path_box">
                                <h3 style="min-height: 0"><a href="<?=Url::to(['/classes/view','id'=>$model->id])?>" ><?=$model->title?></a></h3>
                                <?=StaticFunctions::getShortDescription($model->text)?>
                                <div class="students_box">
                                    <div class="students">Students: 30</div>
                                    <div class="stud_fee">Price: <?=$model->price?></div>
                                </div>
                            </div>
                        </div>
                    </li>
                <?php endforeach;?>

            </ul>
        </div>
    </div>

<?php endif;?>
