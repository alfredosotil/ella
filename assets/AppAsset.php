<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace app\assets;

use yii\web\AssetBundle;

/**
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/style.css',
//        'css/skin/default.css',
        'css/skin/sunrise.css',
//        'css/skin/red-sunset.css',
        'css/custom.css',
    ];
    public $js = [
        'js/modernizr.custom.min.js',
        'js/jquery-1.9.1.min.js',
        'js/jquery-ui-1.10.4.custom.min.js',
        'js/jquery.ba-outside-events.min.js',
        'js/owl.carousel.min.js',
        'js/jquery.magnific-popup.min.js',
        'js/jquery.tweet.min.js',
        'js/library.js',
        'js/classie.js',
        'js/dynamics.min.js',
        'js/main.js',
        'js/scripts.js',
        'js/angular/app.js',
        'js/angular/controllers.js',
        'js/angular/directives.js',
        'js/angular/services.js',
    ];
    public $depends = [
        'app\assets\AngularAsset',
    ];
}
