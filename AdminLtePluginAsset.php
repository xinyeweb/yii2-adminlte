<?php
/**
 * Created by PhpStorm.
 * User: hoter.zhang
 * Date: 2018/5/23
 * Time: 上午 11:40
 */

namespace xinyeweb\adminlte;


use yii\web\AssetBundle;

class AdminLtePluginAsset extends AssetBundle
{

    public $js = [
        'slimScroll/jquery.slimscroll.min.js',
        'chartjs/Chart.min.js',
    ];
    public $css = [
        'font-awesome/css/font-awesome.min.css',
        'Ionicons/css/ionicons.min.css'
    ];
//    public $depends = [
//        'dmstr\web\AdminLteAsset',
//    ];

    public function init() {
        $this->sourcePath = dirname(__FILE__) .DIRECTORY_SEPARATOR . 'assets' . DIRECTORY_SEPARATOR . 'plugins';
        parent::init();
    }
}