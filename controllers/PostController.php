<?php
/**
 * Created by PhpStorm.
 * User: Dmitry
 * Date: 22.09.2017
 * Time: 18:29
 */

namespace app\controllers;

use Yii;
use app\models\TestForm;

class PostController extends AppController
{
    public $layout = 'basic';

    public function beforeAction($action)
    {
        if ($action->id == 'index') {
            $this->enableCsrfValidation = false;
        }
        return parent::beforeAction($action);
    }

    public function actionIndex()
    {
        if (Yii::$app->request->isAjax) {
            debug($_POST);
            debug(Yii::$app->request->post());
            return 'test';
        }

        $model = new TestForm();

        return $this->render('test', compact('model'));
    }

    public function actionShow()
    {
//        $this->layout = 'basic';
        $this->view->title = 'Одна статья';
        $this->view->registerMetaTag(['name' => 'keywords', 'content' => 'ключевики...']);
        $this->view->registerMetaTag(['name' => 'description', 'content' => 'описание страницы...']);
        return $this->render('show');
    }

}