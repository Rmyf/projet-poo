<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Fraisier
 *
 * @author tal
 */
class ApplePie extends Cake {
    
    
    public function __construct() {
        parent::__construct("apple pie", 12);
        $this->ingredients = ["flour ","sugar ","apple "];
        $this->picture = "./images/tarte.jpg";
       
    }
  
}
