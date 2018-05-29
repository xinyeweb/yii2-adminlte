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
        'adminlte/css/AdminLTE.min.css',
        'xy/css/monsterkit.css'
    ];

    public $js = [
        'adminltejs/adminlte.min.js',
        'xy/js/app.min.js',
        [
            'xy/js/html5shiv.min.js',
            'condition' => 'It IE9',
            'position' => View::POS_HEAD
        ],
        [
            'xy/js/respond.min.js',
            'condition' => 'It IE9',
            'position' => View::POS_HEAD
        ]
    ];

    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapPluginAsset',
        'xinyeweb\adminlte\AdminLtePluginAsset',
    ];

    public $skin = '_all-skins';

    public function init() {
        $this->sourcePath = dirname(__FILE__) .DIRECTORY_SEPARATOR . 'assets';
//		$this->sourcePath = '@vendor/almasaeed2010/adminlte/dist';
        if ($this->skin) {
            if (('_all-skins' !== $this->skin) && (strpos($this->skin, 'skin-') !== 0)) {
                throw new Exception('Invalid skin specified');
            }
            $this->css[] = sprintf('adminlte/css/skins/%s.min.css', $this->skin);
        }

        parent::init();
    }
}