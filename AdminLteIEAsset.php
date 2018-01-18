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

class AdminLteIEAsset extends AssetBundle
{

    public $css = [];

    public $js = [
        'js/html5shiv.min.js',
        'js/respond.min.js',
    ];

    public $jsOptions = [
        'condition' => 'It IE 9',
    ];

    public function init() {
        $this->sourcePath = dirname(__FILE__) .DIRECTORY_SEPARATOR . 'assets';
        parent::init();
    }
}