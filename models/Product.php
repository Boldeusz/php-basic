<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace app\models;

/**
 * Description of Product
 *
 * @author Marcin
 */
class Product extends \yii\db\ActiveRecord implements \yz\shoppingcart\CartPositionInterface {
    
    use \yz\shoppingcart\CartPositionTrait;
    public function getPrice() {
        return $this->price;
    }
    public function getId() {
        return $this->id;
    }
    //put your code here
}
