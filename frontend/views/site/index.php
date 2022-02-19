<?php

/* @var $this yii\web\View */

use frontend\widgets\Blog;
use frontend\widgets\Classes;
use frontend\widgets\Teacher;

$this->title = 'My Yii Application';
?>
<div class="about-wrap  " id="about">
    <div class="container">
        <div class="row">
            <div class="col-lg-7">
                <div class="aboutImg"><img src="images/aboutImg.png" alt=""></div>
            </div>
            <div class="col-lg-5">
                <div class="about_box">
                    <div class="title">
                        <h1>Online Learing <span>PLatform</span></h1>
                    </div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus nibh dolor, gravida faucibus dolor consectetur, pulvinar rhoncus risus. Fusce vel rutrum mi.</p>
                    <ul class="edu_list">
                        <li>
                            <div class="learing-wrp">
                                <div class="edu_icon"><img src="images/education.png" alt=""></div>
                                <div class="learn_info">
                                    <h3>Special Education</h3>
                                    <p>Lorem ipsum dolor sit amet, adipiscing elit. Vivamus nibh dolor gravida at eleifend</p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="learing-wrp">
                                <div class="edu_icon"><img src="images/class.png" alt=""></div>
                                <div class="learn_info">
                                    <h3>Honors classes</h3>
                                    <p>Lorem ipsum dolor sit amet, adipiscing elit. Vivamus nibh dolor gravida at eleifend</p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="learing-wrp">
                                <div class="edu_icon"><img src="images/academy.png" alt=""></div>
                                <div class="learn_info">
                                    <h3>Traditional academies</h3>
                                    <p>Lorem ipsum dolor sit amet, adipiscing elit. Vivamus nibh dolor gravida at eleifend</p>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<?=Classes::widget()?>
<!-- Choice Start -->
<div class="choice-wrap ">
    <div class="container">
        <div class="title">
            <h1>We Are The Best <span>Choice For Your Child</span></h1>
        </div>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam at eleifend est. Donec dictum at diam ut finibus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Aliquam diam magna, condimentum in nibh sed, mattis fermentum diam.</p>
        <div class="readmore"><a href="#">Contact Us</a></div>
    </div>
</div>
<!-- Choice End -->
<?=Teacher::widget()?>
<?=Blog::widget()?>
