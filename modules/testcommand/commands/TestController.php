<?php
/**
 * Created by PhpStorm.
 * User: ilya
 * Date: 26.09.18
 * Time: 11:33
 */
namespace app\modules\testcommand\commands;

use Yii;
use yii\console\Controller;
use yii\helpers\Console;

class TestController extends Controller
{

    public function actionView() {
        echo 'He';
        return true;
    }

}