<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace app\assets;

use yii\web\AssetBundle;

/**
 * Main application asset bundle.
 *
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class SbadminAsset extends AssetBundle
{
    public $sourcePath = __DIR__ . '/../themes/sbss';
	public $css = [
    'vendor/fontawesome-free/css/all.min.css',
    '//fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i',
    'css/sb-admin-2.min.css'
	];
	public $js = [
    'js/sb-admin-2.min.js',
	'vendor/jquery-easing/jquery.easing.min.js',
	'vendor/chart.js/Chart.min.js',
	'vendor/jquery/jquery.min.js',
	'vendor/bootstrap/js/bootstrap.bundle.min.js'
	];
	public $depends = [
        'app\assets\AppAsset',
    ];
}
