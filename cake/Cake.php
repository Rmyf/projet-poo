<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Cake
 *
 * @author tal
 */
class Cake {
    
    
    public$name;
    public $price;
    public $ingredients;
    public $picture;
    
    
        
    public function __construct($name, $price) {
        $this->name = $name;
        $this->price = $price;
        
    }

    
    public function __toString() {
        return $this->name. ' '. $this->price.'$';
    }

}


