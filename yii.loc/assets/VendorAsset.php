<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace app\assets;

use yii\web\AssetBundle;

;

/**
 * This asset bundle provides the [jQuery](http://jquery.com/) JavaScript library.
 *
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class VendorAsset extends AssetBundle
{
    public $sourcePath = '../assets/vendor';
    public $js = [
        'jquery.min.js',
        'bootstrap.min.js',
    ];
    public $css = [
//        'bootstrap.min.css',
    ];
}
