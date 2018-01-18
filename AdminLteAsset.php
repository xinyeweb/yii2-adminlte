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

class AdminLteAsset extends AssetBundle
{

    public $css = [
        'css/AdminLTE.min.css',
    ];

    public $js = [
        'js/adminlte.min.js',
    ];

    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapPluginAsset',
		'xinyeweb\adminlte\FontAwesomeAsset',
		'xinyeweb\adminlte\XYAdminLteAsset',
    ];

    public $skin = '_all-skins';

    public function init() {
        //$this->sourcePath = dirname(__FILE__) .DIRECTORY_SEPARATOR . 'assets';
		$this->sourcePath = '@vendor/almasaeed2010/adminlte/dist';
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