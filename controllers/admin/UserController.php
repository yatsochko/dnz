<?php

/**
 * Created by PhpStorm.
 * User: Dmitry
 * Date: 22.09.2017
 * Time: 18:13
 */

namespace app\controllers\admin;

use app\controllers\AppController;

class UserController extends AppController
{
    public function actionIndex()
    {
        return $this->render('index');
    }
}