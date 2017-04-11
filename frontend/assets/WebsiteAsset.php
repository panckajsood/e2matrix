<?php

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * Main frontend application asset bundle.
 */
class WebsiteAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'https://fonts.googleapis.com/css?family=Raleway',
        'https://fonts.googleapis.com/css?family=Roboto',
        'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css',    
        'frontend/web/css/main-site/fontello.css',
        'frontend/web/css/main-site/bootstrap.min.css',
        'frontend/web/css/main-site/style.css',
    ];
    public $js = [
         'https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js',
         'https://cdn.rawgit.com/nnattawat/flip/master/dist/jquery.flip.min.js',
         'frontend/web/js/main-site/bootstrap.min.js',
         'frontend/web/js/main-site/jquery.combinedScroll.js',
         'frontend/web/js/main-site/main.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
