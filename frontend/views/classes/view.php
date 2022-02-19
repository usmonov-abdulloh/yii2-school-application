<?php

$this->title = $model->title;
?>
<div class="innerHeading-wrap">
    <div class="container">
        <h1><?=$model->title?></h1>
    </div>
</div>

<div class="innerContent-wrap">
    <div class="container">

        <div class="classDetails-wrap">
            <div class="row">
                <div class="col-lg-8">
                    <div class="class_left ">
                        <div class="class_Img"><img src="images/large_img.jpg" alt="">
                            <div class="time_box"><span><?=date("d.m.Y H:i",strtotime($model->date))?></span></div>
                        </div>
                        <h3><?=$model->title?></h3>
                        <div class="news-box">
                            <?=$model->text?>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="single-widgets widget_category ">
                        <h4>Categories</h4>
                        <ul class="unorderList">
                            <li><a href="#">Apartement <span>09</span></a></li>
                            <li><a href="#">Villa <span>12</span></a></li>
                            <li><a href="#">Family House <span>19</span></a> </li>
                            <li><a href="#">Modern Villa <span>17</span></a></li>
                            <li><a href="#">Town House <span>10</span></a></li>
                            <li><a href="#">Office <span>10</span></a></li>
                        </ul>
                    </div>
                    <div class="single-widgets widget_category ">
                        <h4>Recents Property</h4>
                        <ul class="property_sec">
                            <li>
                                <div class="rec_proprty">
                                    <div class="propertyImg"><img src="images/gallery-1.jpg"></div>
                                    <div class="property_info">
                                        <h4><a href="#">1324 Tennessee Road</a></h4>
                                        <p>Lorem ipsum dolor sit amet, adipiscing elit.</p>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="rec_proprty">
                                    <div class="propertyImg"><img src="images/gallery-2.jpg"></div>
                                    <div class="property_info">
                                        <h4><a href="#">1324 Tennessee Road</a></h4>
                                        <p>Lorem ipsum dolor sit amet, adipiscing elit.</p>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="rec_proprty">
                                    <div class="propertyImg"><img src="images/gallery-3.jpg"></div>
                                    <div class="property_info">
                                        <h4><a href="#">1324 Tennessee Road</a></h4>
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

                </div>
            </div>
        </div>

    </div>
</div>