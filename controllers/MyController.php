<?php
/**
 * Created by PhpStorm.
 * User: Dmitry
 * Date: 22.09.2017
 * Time: 16:37
 */

namespace app\controllers;

class MyController extends AppController
{
    public function actionIndex($id = null)
    {
        $hi = 'Hello World';
        $names = ['Ivanov', 'Petrov', 'Sidorov'];
//        return $this->render('index', ['hello' => $hi, 'names' => $names]);
        return $this->render('index', compact('hi', 'names', 'id'));
    }

    public function actionBlogPost()
    {
        // my/blog-post/
        return 'Blog Post';
    }
}