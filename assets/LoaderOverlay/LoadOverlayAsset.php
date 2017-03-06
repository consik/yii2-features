<?php
/**
 * Asset bundle for gasparesganga-jquery-loading-overlay
 * @link http://gasparesganga.com/labs/jquery-loading-overlay/
 * @author JS LIB BY © 2014 - 2017 Gaspare Sganga
 */
namespace consik\yii2features\assets\LoaderOverlay;

/**
 * Class LoadOverlayAsset
 * @link https://github.com/consik/yii2-features
 * @package consik\yii2features\assets\LoaderOverlay
 *
 * @author Sergey Poltaranin <consigliere.kz@gmail.com>
 * @copyright Copyright (c) 2017
 */
class LoadOverlayAsset extends \yii\web\AssetBundle
{
    public $sourcePath = __DIR__ . '/js/';
    public $basePath = '';
    public $css = [];
    public $js = [
        'loadingoverlay.min.js',
        'loadingoverlay_progress.min.js'
    ];
    public $depends = [
        \yii\web\JqueryAsset::class
    ];
}