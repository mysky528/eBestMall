<?php

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * Main frontend application asset bundle.
 */
class DefaultAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/style.css',
    ];
    public $js = [
        'js/jquery-1.11.1.min_044d0927.js',
        'js/jquery.bxslider_e88acd1b.js',
        'js/jquery-1.8.2.min.js',
        'js/menu.js',
        'js/select.js',
        'js/lrscroll.js',
        'js/iban.js',
        'js/fban.js',
        'js/mban.js',
        'js/hban.jsjs/bban.js',
        'js/tban.js',
        'js/lrscroll_1.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        //'yii\bootstrap\BootstrapAsset',
    ];
}
