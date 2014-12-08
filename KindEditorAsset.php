<?php

namespace sailinghang\kindeditor;

use yii\web\AssetBundle;

class KindEditorAsset extends AssetBundle
{
    public $sourcePath = '@vendor/sailinghang/yii2-kindeditor/assets';
    public $js = [
        'kindeditor.js',
    ];
    public $css = [
        'themes/default/default.css',
    ];

}
