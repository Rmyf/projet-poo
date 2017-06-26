<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Robot
 *
 * @author tal
 */
class Robot {
    
    protected $numeroDeSerie;
    
   
            
    public function __construct($numero) {
        $this->numeroDeSerie=$numero;
        
        
    }

    public function saluer() {
        return "Bonjour bip boup je suis le robot n°".
                $this->numeroDeSerie;
    }
    //put your code here
}
