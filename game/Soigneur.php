<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Soigneur
 *
 * @author tal
 */
class Soigneur extends Personnage {
    
   private $bandages =10;
    
    
    
    public function soigner(Personnage $perso): bool{
        if ($this ->bandages > 0){
            
        $perso-> vie +=10;
        
        $this->bandages --;
        
        return true;
    }
        return false;
}
}
    
