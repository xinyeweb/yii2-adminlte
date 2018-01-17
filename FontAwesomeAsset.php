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

class FontAwesomeAsset extends AssetBundle
{

    public $css = [
        'css/font-awesome.min.css'
    ];
	
    public function init() {
        $this->sourcePath = '@bower/fontawesome';
		$this->publishOptions['beforeCopy'] = function ($from, $to) {
            return preg_match('%(/|\\\\)(fonts|css)%', $from);
        };
        parent::init();
    }
}