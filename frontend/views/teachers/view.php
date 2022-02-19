<?php

$this->title = $model->name;
?>
<!-- Inner Heading Start -->
<div class="innerHeading-wrap">
    <div class="container">
        <h1><?=$model->name?></h1>
    </div>
</div>
<!-- Inner Heading End -->

<!-- Inner Content Start -->
<div class="innerContent-wrap">
    <div class="container">

        <!-- Teachers Start -->
        <div class="classDetails-wrap">
            <div class="row">
                <div class="col-lg-4">
                    <div class="teacher_left">
                        <div class="teacher_delImg"> <img src="<?=$image?>" alt="Image"></div>
                    </div>
                    <ul class="social-default ">
                        <li><a href="#"><i class="fab fa-facebook-f" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fab fa-twitter" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fab fa-google-plus-g" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fab fa-instagram" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fab fa-pinterest-p" aria-hidden="true"></i></a></li>
                    </ul>
                    <ul class="teacher-address ">
                        <li><span><i class="fas fa-home" aria-hidden="true"></i></span>123 Lorem Ispum, Georgia 4567.</li>
                        <li><span><i class="fas fa-phone-alt" aria-hidden="true"></i></span>(777) 123 4567</li>
                        <li><span><i class="fas fa-envelope" aria-hidden="true"></i></span>Contact@LabArtisan.com</li>
                        <li><span><i class="fas fa-globe" aria-hidden="true"></i></span>www.kideskool.com</li>
                    </ul>
                </div>
                <div class="col-lg-8">
                    <div class="teacher_del ">
                        <h3><?=$model->name?></h3>
                        <div class="designation"><?=$model->job?></div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc bibendum dui metus, vitae auctor nibh tincidunt pulvinar. Integer id arcu sed orci mollis tincidunt. Aliquam quis aliquet arcu, sit amet lobortis lectus. Nam et lorem et turpis malesuada auctor. Fusce a diam eget neque porta porta. Maecenas sit amet viverra lacus. Nam aliquam semper leo a interdum.</p>
                        <p>Nunc pretium nec lectus venenatis mattis. Pellentesque accumsan iaculis tristique. Aliquam sagittis lacinia eros, sed rutrum lectus semper non. Donec imperdiet auctor arcu ut sollicitudin. Sed tincidunt, erat a condimentum ornare, purus nunc pulvinar justo, in porta dolor nisi et est. Nullam quis mollis mauris. Donec sed ex non erat vehicula elementum. Duis luctus laoreet justo, vel vehicula sapien gravida ut. Quisque gravida et ex a venenatis. Morbi vitae ullamcorper velit. Ut vel arcu elementum, blandit tellus vel, cursus lacus. Sed ornare, nulla ac gravida maximus, erat velit laoreet sapien, in elementum mi risus in lectus.</p>
                        <div class="progress-skill">
                            <h3>Personal Skills</h3>
                            <div class="progress-wrap" data-animation-section="progress-line">
                                <p class="progress-head">Teaching <span>85%</span></p>
                                <div class="progress-line-wrap">
                                    <div class="progress-line color-1" data-animation-block="is-vision" data-value="85" style="width: 85%;"></div>
                                </div>
                            </div>
                            <div class="progress-wrap" data-animation-section="progress-line">
                                <p class="progress-head">Speaking <span>95%</span></p>
                                <div class="progress-line-wrap">
                                    <div class="progress-line color-2" data-animation-block="is-vision" data-value="95" style="width: 95%;"></div>
                                </div>
                            </div>
                            <div class="progress-wrap" data-animation-section="progress-line">
                                <p class="progress-head">Family Support <span>74%</span></p>
                                <div class="progress-line-wrap">
                                    <div class="progress-line color-3" data-animation-block="is-vision" data-value="74" style="width: 74%;"></div>
                                </div>
                            </div>
                            <div class="progress-wrap" data-animation-section="progress-line">
                                <p class="progress-head">Children's Well-being <span>81%</span></p>
                                <div class="progress-line-wrap">
                                    <div class="progress-line color-4" data-animation-block="is-vision" data-value="81" style="width: 81%;"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Teachers End -->

    </div>
</div>
<!-- Inner Content Start -->