<?php
use common\models\StaticFunctions;
use yii\helpers\Url;

?>

<?php if (!empty($teachers)):?>
    <section class="teachers-area-three teacher-wrap pt-100 pb-70  ">
        <div class="container">
            <div class="title center_title">
                <h1>Our Teachers</h1>
            </div>
            <div class="row justify-content-between">
                <?php foreach ($teachers as $teacher):?>
                    <?php $image = StaticFunctions::getImage('teachers',$teacher->id,$teacher->image)?>
                    <div class="col-lg-3 col-sm-6">
                        <div class="single-teachers">
                            <div class="teacherImg"> <img src="<?=$image?>" alt="Image">
                                <ul class="social-icons list-inline">
                                    <li class="social-facebook"> <a href="#"><i class="fab fa-facebook-f" aria-hidden="true"></i></a> </li>
                                    <li class="social-twitter"> <a href="#"><i class="fab fa-twitter" aria-hidden="true"></i></a> </li>
                                    <li class="social-linkedin"> <a href="#"><i class="fab fa-linkedin-in" aria-hidden="true"></i></a> </li>
                                    <li class="social-googleplus"> <a href="#"><i class="fab fa-instagram" aria-hidden="true"></i></a> </li>
                                </ul>
                            </div>
                            <div class="teachers-content">
                                <h3><a href="<?=Url::to(['/teachers/view','id'=>$teacher->id])?>"><?=$teacher->name?>   </a></h3>
                                <div class="designation"><?=$teacher->job?></div>
                            </div>
                        </div>
                    </div>
                <?php endforeach;?>
            </div>
        </div>
    </section>
<?php endif;?>
