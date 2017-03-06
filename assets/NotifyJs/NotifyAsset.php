<?php
/**
 * Asset bundle for notify.js
 * @link https://notifyjs.com/
 * @author JS LIB BY © Jaime Pillora
 */
namespace consik\yii2features\assets\NotifyJs;

/**
 * Class NotifyAsset
 * @link https://github.com/consik/yii2-features
 * @package consik\yii2features\assets\LoaderOverlay
 *
 * @author Sergey Poltaranin <consigliere.kz@gmail.com>
 * @copyright Copyright (c) 2017
 */
class NotifyAsset extends \yii\web\AssetBundle
{
    public $sourcePath = __DIR__ . '/js/';
    public $basePath = '';
    public $css = [];
    public $js = [
        'notify.min.js',
    ];
    public $depends = [
        \yii\web\JqueryAsset::class
    ];
}