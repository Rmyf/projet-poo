<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


/**
 * Description of Saint-honoré
 *
 * @author tal
 */
class Brownie extends Cake {
    
     public function __construct() {
        parent::__construct("brownie", 8);
        $this->ingredients = ["flour ","sugar ","chocolat "];
        $this->picture = "./images/brownie.jpg";
       
    }
  
//put your code here
}
