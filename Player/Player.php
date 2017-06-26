<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Player
 *
 * @author tal
 */
class Player {
    
    public $height;
    public $weight;
    public $age;
    public $nationallity;
    public $name;
    
    
    public function __construct($age, $name) {
      

        $this->age = $age;
        $this->name = $name;
        $this ->nationality="american";
        
    }

        //put your code here
}

$jordan = new Player ("jordan",50);
$jordan -> nationallity = "French";

