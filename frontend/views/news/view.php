<?php

use frontend\widgets\Categories;
use frontend\widgets\Search;

$this->title = $model->title;
?>
<style>

    .news-box img {
        max-width: 100%;
        max-height: 100%;
    }
    .main-img {
        width:100% !important;
    }
</style>

<div class="innerHeading-wrap">
    <div class="container">
        <h1><?=$model->title?></h1>
    </div>
</div>

<div class="innerContent-wrap">
    <div class="container">
        <div class="blog_inner bloggridWrp">
            <div class="row">
                <div class="col-lg-8 ">
                    <div class="class_left">
                        <div class="class_Img"><img src="images/large_img.jpg" alt="">
                            <div class="time_box"><span><?=date("d.m.Y",strtotime($model->created_date))?></span></div>
                        </div>
                        <div class="news-box">
                            <?=$model->description?>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <?= Search::widget()?>
                    <div class="single-widgets widget_category ">
                        <h4>Recents Classes</h4>
                        <ul class="property_sec ">
                            <li>
                                <div class="rec_proprty">
                                    <div class="propertyImg"><img src="images/gallery-1.jpg"></div>
                                    <div class="property_info">
                                        <h4><a href="#">English Classroom</a></h4>
                                        <p>Lorem ipsum dolor sit amet, adipiscing elit.</p>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="rec_proprty">
                                    <div class="propertyImg"><img src="images/gallery-2.jpg"></div>
                                    <div class="property_info">
                                        <h4><a href="#">English Classroom</a></h4>
                                        <p>Lorem ipsum dolor sit amet, adipiscing elit.</p>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="rec_proprty">
                                    <div class="propertyImg"><img src="images/gallery-3.jpg"></div>
                                    <div class="property_info">
                                        <h4><a href="#">English Classroom</a></h4>
                                        <p>Lorem ipsum dolor sit amet, adipiscing elit.</p>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <?= Categories::widget()?>
                </div>
            </div>
        </div>
    </div>
</div>