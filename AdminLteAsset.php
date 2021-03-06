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

class AdminLteAsset extends AssetBundle
{

    public $css = [
        'css/font-awesome.min.css',
        'css/ionicons.min.css',
        'css/AdminLTE.min.css',
        'css/monsterkit.css'
    ];

    public $js = [
        'js/app.min.js',
        'js/demo.js',
        'plugins/slimScroll/jquery.slimscroll.min.js',
        'plugins/chartjs/Chart.min.js',
        [
            'js/html5shiv.min.js',
            'condition' => 'Ite IE9',
            'position' => View::POS_HEAD
        ],
        [
            'js/respond.min.js',
            'condition' => 'Ite IE9',
            'position' => View::POS_HEAD
        ]
    ];

    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapPluginAsset',
    ];

    public $skin = '_all-skins';

    public function init() {
        $this->sourcePath = dirname(__FILE__) .DIRECTORY_SEPARATOR . 'assets';
        // Append skin color file if specified
        if ($this->skin) {
            if (('_all-skins' !== $this->skin) && (strpos($this->skin, 'skin-') !== 0)) {
                throw new Exception('Invalid skin specified');
            }
            $this->css[] = sprintf('css/skins/%s.min.css', $this->skin);
        }

        parent::init();
    }
}
