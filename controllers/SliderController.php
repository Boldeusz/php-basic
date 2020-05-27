<?php

namespace app\controllers;
   use yii\web\Controller;
   class SliderController extends Controller {
      public function actionSlider() {
         return $this->render('slider');
      }
   }