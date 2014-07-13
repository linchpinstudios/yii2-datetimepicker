<?php
/**
 * @link http://www.linchpinstudios.com/
 * @copyright Copyright (c) 2014 Linchpin Studios LLC
 * @license http://opensource.org/licenses/MIT
 */

namespace linchpinstudios\datetimepicker;

use yii\web\AssetBundle;

/**
 * Asset bundle for the Twitter bootstrap css files.
 *
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class DateTimePickerAssets extends AssetBundle
{
    public $sourcePath = '@vendor/linchpinstudios/yii2-datetimepicker';
    public $css = [
        'dist/css/jquery.datetimepicker.css',
    ];
    public $js = [
        'dist/js/jquery.datetimepicker.js',
    ];
    public $depends = [
        'yii\web\JqueryAsset',
    ];
}