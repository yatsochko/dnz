<?php
/**
 * Created by PhpStorm.
 * User: Dmitry
 * Date: 22.09.2017
 * Time: 18:26
 */

namespace app\controllers;

use yii\web\Controller;

class AppController extends Controller
{
    public function debug($arr)
    {
        echo '<pre>' . print_r($arr, true) . '</pre>';
    }
}
