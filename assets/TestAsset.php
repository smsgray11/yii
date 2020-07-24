<?php


namespace app\assets;


use yii\web\AssetBundle;

class TestAsset extends AssetBundle
{

    public $basePath = '@webroot';
    public $baseUrl = '@web';

    public $sourcePath = '@app/components';

    public $css = [
        'css/styles.css',
    ];

    public $js = [
//        'https://ajax.googleapis.com/ajax/libs/d3js/5.15.1/d3.min.js',
        'js/scripts.js',
    ];

    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapPluginAsset',
    ];
}