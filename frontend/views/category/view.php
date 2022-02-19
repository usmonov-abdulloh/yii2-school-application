<?php

use common\models\StaticFunctions;
use yii\bootstrap4\LinkPager;
use yii\helpers\StringHelper;
use yii\helpers\Url;

?>
    <!-- Inner Heading Start -->
<div class="innerHeading-wrap">
    <div class="container">
        <h1>Blog List</h1>
    </div>
</div>
<!-- Inner Heading End -->

<!-- Inner Content Start -->
<div class="innerContent-wrap">
    <div class="container">
        <div class="blog_inner bloggridWrp blog_listWrp">
            <div class="row">
                <div class="col-lg-8">
                    <ul class="unorderList">
                        <?php foreach ($models as $model):?>
                        <?php $image = StaticFunctions::getImage('news',$model->id,$model->image)?>
                        <li>
                            <div class="blog_box">
                                <div class="row">
                                    <div class="col-lg-5">
                                        <div class="blogImg"><img src="<?=$image?>" style="height: 300px;object-fit: cover;" alt="">
                                            <div class="time_box"><span><?=date('d.m.Y',strtotime($model->created_date))?></span></div>
                                        </div>
                                    </div>
                                    <div class="col-lg-7">
                                        <div class="path_box">
                                            <h3><a href="<?=Url::to(['/news/view','id'=>$model->id])?>"><??></a></h3>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent diam massa, commodo sed purus eu, aliquet.</p>
                                            <div class="readmore"><a href="<?=Url::to(['/news/view','id'=>$model->id])?>">Read More</a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <?php endforeach;?>
                        <?= LinkPager::widget([
                            'pagination'=>$pagination
                        ])?>
                    </ul>
                </div>
                <div class="col-lg-4">
                    <div class="single-widgets widget_search ">
                        <h4>Search</h4>
                        <form action="#" class="sidebar-search-form">
                            <input type="search" name="search" placeholder="Search..">
                            <button type="submit"><i class="fas fa-search"></i></button>
                        </form>
                    </div>
                    <div class="single-widgets widget_category ">
                        <h4>Categories</h4>
                        <ul class="categories">
                            <li><a href="#">Educations (6)</a></li>
                            <li><a href="#">Childs (12)</a></li>
                            <li><a href="#">Design (4)</a></li>
                            <li><a href="#">Lifestyle (2)</a></li>
                            <li><a href="#">Daily Meals (8)</a></li>
                            <li><a href="#">Teachers (9)</a></li>
                            <li><a href="#">Uncategorized (2)</a></li>
                        </ul>
                    </div>
                    <div class="single-widgets widget_category ">
                        <h4>Recents Classes</h4>
                        <ul class="property_sec">
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
                    <div class="single-widgets widget_category ">
                        <h4>Archives</h4>
                        <ul class="categories">
                            <li><a href="#">May 2020 </a></li>
                            <li><a href="#">February 2019 </a></li>
                            <li><a href="#">August 2018 </a></li>
                        </ul>
                    </div>
                    <div class="single-widgets ">
                        <h4>Tags</h4>
                        <ul class="tags">
                            <li><a href="#">School</a></li>
                            <li><a href="#">Study</a></li>
                            <li><a href="#">English</a></li>
                            <li><a href="#">Parents</a></li>
                            <li><a href="#">Sports</a></li>
                            <li><a href="#">News</a></li>
                            <li><a href="#">Teachers</a></li>
                            <li><a href="#">Art</a></li>
                            <li><a href="#">Meetings</a></li>
                            <li><a href="#">Design</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Inner Content Start -->
