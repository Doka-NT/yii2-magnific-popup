<?php

namespace porcelanosa\magnificPopup;

class MagnificPopupAsset extends \yii\web\AssetBundle
{
    public $sourcePath = __DIR__ . '/assets';
    
    public $js = [
        'js/jquery.magnific-popup.js',
    ];
    
    public $css = [
        'css/magnific-popup.css'
    ];
    
    public $depends = [
        'yii\web\JqueryAsset'
    ];
}
