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

class XYAdminLteAsset extends AssetBundle
{

    public $css = [
        'css/monsterkit.css'
    ];

    public $js = [];

    public $skin = '_all-skins';

    public function init() {
        $this->sourcePath = dirname(__FILE__) .DIRECTORY_SEPARATOR . 'assets';
        parent::init();
    }
}