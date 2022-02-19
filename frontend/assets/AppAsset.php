<?php

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * Main frontend application asset bundle.
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        "favicon.ico",
        "css/bootstrap.min.css",
        "css/all.css" ,
        "css/owl.carousel.css" ,
        "rs-plugin/css/settings.css",
        "css/jquery.fancybox.min.css",
        "css/animate.css" ,
        "css/style.css",
        "https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700;800&amp;display=swap",
        "https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800;900&amp;display=swap",
    ];
    public $js = [
        "js/jquery.min.js",
        "js/bootstrap.min.js",
        "js/popper.min.js",
        "rs-plugin/js/jquery.themepunch.tools.min.js",
        "rs-plugin/js/jquery.themepunch.revolution.min.js",
        "js/jquery.fancybox.min.js",
        "js/animate.js",
        "js/wow.js",
        "js/owl.carousel.js",
        "js/script.js",
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap4\BootstrapAsset',
    ];
}
