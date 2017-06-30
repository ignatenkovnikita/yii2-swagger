<?php
namespace ignatenkovnikita\swagger\assets;


use yii\web\AssetBundle;
use yii\web\View;

class SwaggerAsset extends AssetBundle
{
//    public $sourcePath = '@vendor/theme/sdrugom';

    public $sourcePath = '@bower/swagger-ui/dist';

    public $js = [
        'swagger-ui-bundle.js',
        'swagger-ui-standalone-preset.js',
    ];

    public $jsOptions = [
        'position' => View::POS_HEAD,
    ];

    public $css = [
        'swagger-ui.css',
    ];
}