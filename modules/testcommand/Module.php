<?php
/**
 * Created by PhpStorm.
 * User: ilya
 * Date: 26.09.18
 * Time: 11:31
 */
namespace app\modules\testcommand;

use yii\base\Module as BaseModule;
use yii\base\BootstrapInterface;

class Module extends BaseModule implements BootstrapInterface
{
    public $controllerNamespace = 'app\modules\testcommand\commands';

    public function init() {
        parent::init();
    }

    public function bootstrap($app)
    {
        if($app instanceof \yii\console\Application) {
            $this->controllerNamespace = 'app\modules\testcommand\commands';
        }
    }

}
