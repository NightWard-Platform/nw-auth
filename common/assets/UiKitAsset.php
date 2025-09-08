<?php

namespace common\assets;

use yii\web\AssetBundle;

class UiKitAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';

    public $css = [
        'css/uikit.css',
    ];
    public $js = [
        'js/uikit.js'
    ];

    public $depends = [
        'yii\bootstrap5\BootstrapAsset', // если юзаешь bootstrap5
    ];
}
