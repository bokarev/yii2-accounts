<?php

namespace cakebake\accounts;

use Yii;

class Module extends \yii\base\Module
{
    /**
    * @var bool Enable/Disable Login
    */
    public $loginEnabled = true;

    /**
    * @inheritdoc
    */
    public $defaultRoute = 'user';

    /**
    * @inheritdoc
    */
    public function init()
    {
        parent::init();

        Yii::setAlias('@accounts', $this->getBasePath());
    }
}
