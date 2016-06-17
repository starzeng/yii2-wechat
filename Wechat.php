<?php

namespace starzeng\wechat;

use yii\base\InvalidConfigException;

/**
 * This is just an example.
 */
class Wechat extends \yii\base\Widget {

    public $url;

    public function init() {
        parent::init();
        if ($this->url === null) {
            throw new InvalidConfigException('Please specify the "model" property.');
        }
    }

    public function run() {
        return "Wechat!";
    }

}
