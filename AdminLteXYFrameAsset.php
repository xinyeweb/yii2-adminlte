<?php

/**
 * Created by PhpStorm.
 * User: hoter
 * Date: 2016/4/22
 * Time: 14:30
 */

namespace xinyeweb\adminlte;

use yii\base\Exception;
use yii\web\AssetBundle;
use yii\web\View;

class AdminLteXYFrameAsset extends AssetBundle
{

    public $css = [
        'xyframe/css/frame.css',
    ];

    public $js = [
        'xyframe/js/contabs.js',
        'xyframe/js/frame.js',
    ];

    public $depends = [
        'xinyeweb\adminlte\AdminLteAsset',
    ];


    public function init() {
        $this->sourcePath = dirname(__FILE__) .DIRECTORY_SEPARATOR . 'assets';
        parent::init();
    }
}
