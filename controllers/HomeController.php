<?php

namespace app\controllers;

use yii;
use yii\web\Controller;

class HomeController extends Controller
{
    public function actionIndex()
    {
        echo "Hello";
    }
    public function actionTest()
    {
        echo "Hi";
    }
    public function actionPage()
    {
        // $this->layout=false;
        return $this->render("login_home");
    }

}