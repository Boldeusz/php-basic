<?php

namespace app\modules\hello\controllers;
   use yii\web\Controller;
   class CustomController extends Controller {
      public function actionGreat() {
         return $this->render('great');
      }
   }