<?php
/**
 * Asset bundle for notify.js
 * @link https://jquerymobile.com/
 * @author The jQuery Foundation
 */
namespace consik\yii2features\assets\JqueryMobile;

/**
 * Class JqueryMobileAsset
 * @link https://github.com/consik/yii2-features
 * @package consik\yii2features\assets\JqueryMobile
 *
 * @author Sergey Poltaranin <consigliere.kz@gmail.com>
 * @copyright Copyright (c) 2017
 */
class JqueryMobileAsset extends \yii\web\AssetBundle
{
    public $sourcePath = __DIR__ . '/js/';
    public $basePath = '';
    public $css = [];
    public $js = [
        'jquery.mobile-1.4.5.min.js',
    ];
    public $depends = [
        \yii\web\JqueryAsset::class
    ];
}