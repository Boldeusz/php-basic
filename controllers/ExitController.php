<?php

namespace app\controllers;



class ExitController extends \yii\web\Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }
    public function actionGreet($message = "Hello greet"){
        return $this->render("greet",['message'=>$message]);
    }
    

}
// \yii\web\Controller