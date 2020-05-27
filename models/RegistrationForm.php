<?php

namespace app\models;
   use app\components\CityValidator;
   
   use yii\base\Model;
   class RegistrationForm extends Model {
      public $username;
      public $password;
      public $email;
      public $country;
      public $city;
      public $phone;
      public function rules() {
         return [
             [['name', 'email'], 'required'],
             ['city', CityValidator::class],
            // the username, password, email, country, city, and phone attributes are
            //required
 //            [['password', 'email', 'country', 'city', 'phone'], 'required'],
 //           ['username', 'required', 'message' => 'Username is required!!!!!!!!!!!!!'],
            // the email attribute should be a valid email address
 //           ['email', 'email'],
 //           
 //            ['city', CityValidator::class],
 //            ['city', 'validateCity'],
         ];
      }
   /*   public function validateCity($attribute, $params, $validator) {
         if (!in_array($this->$attribute, ['Paris', 'London'])) {
            $this->addError($attribute, 'The city must be either "London" or "Paris".');
         }
      }*/
   }
