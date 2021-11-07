<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace app\assets;

use yii\web\AssetBundle;

class AppAsset extends AssetBundle
{
    public $css = [
        'css/custom-skin.css',
        'css/custom.css',
        'css/site.css',
        'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'
    ];

    public $js = [
    ];

    public $jsOptions = array(
        'position' => \yii\web\View::POS_HEAD
    );
    
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
        'dmstr\web\AdminLteAsset'
    ];
}
