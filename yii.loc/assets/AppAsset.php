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
        'css/bootstrap.min.css',
        'css/font-awesome.min.css',
        'css/animate.css',
        'css/slick.css',
        'css/theme.css',
        'css/style.css',
        'https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.4/css/select2.min.css',
    ];
    public $js = [
        'js/wow.min.js',
        'js/slick.min.js',
        'js/custom.js',
        'js/popper.min.js',
        'js/respond.min.js',
        'https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.4/js/select2.min.js',
    ];
    public $depends = [
        'app\assets\VendorAsset'
    ];
}
