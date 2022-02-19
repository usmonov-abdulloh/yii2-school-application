<?php
use common\models\Menu;
?>

<div class="header-wrap">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-3 col-md-12 navbar-light">
                <div class="logo"> <a href="/"><img alt="" class="logo-default" src="/images/logo.png"></a></div>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button>
            </div>
            <div class="col-lg-6 col-md-12">
                <div class="navigation-wrap" id="filters">
                    <nav class="navbar navbar-expand-lg navbar-light"> <a class="navbar-brand" href="#">Menu</a>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <button class="close-toggler" type="button" data-toggle="offcanvas"> <span><i class="fas fa-times-circle" aria-hidden="true"></i></span> </button>
                            <?php if (!empty($menus)):?>
                                <ul class="navbar-nav mr-auto">
                                    <?php foreach ($menus as $menu):?>

                                        <li class="nav-item"><a class="nav-link" href="classes.html"><?=$menu->name?></a> <i class="fas fa-caret-down"></i>
                                            <ul class="submenu">
                                                <?php $childElements = Menu::getChildElements($menu->id);?>
                                                <?php foreach ($childElements as $item):?>
                                                    <li><a href="teachers-details.html"><?=$item->name?></a></li>
                                                <?php endforeach;?>
                                            </ul>
                                        </li>
                                    <?php endforeach;?>


                                </ul>
                            <?php endif;?>
                        </div>
                    </nav>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="header_info">
                    <div class="search"><a href="#"><i class="fas fa-search"></i></a></div>
                    <div class="loginwrp"><a href="login.html">Login/Register</a></div>
                </div>
            </div>
        </div>
    </div>
</div>
