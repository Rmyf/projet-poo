<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of MaitreJeu
 *
 * @author tal
 */
class MaitreJeu {
    
    private $monperso;
    private $adversaires;
    private $tour = 0;
    
    public function __construct(Personnage $monperso, Personnage $adversaires) {
        $this->monperso = $monperso;
        $this->adversaires = $adversaires;
    }

        public function attack(){
        if($this->tour % 2 == 0){
            $this->perso1->attack($this->perso2);
        }else {
            
       
       $this->perso2->attack($this->perso1);
        
               $this->tour++;
    }
    
    public function defence (){
        if ($this->tour % 2 == 0){
            $this->perso1->defence();
            
        }else {
            $this->perso2->defence();
        }
        $this->tour++;
        
    }
  public function affichage (){
      return $this->perso1->genererHTML()
              $this->perso2->genererHTML();
  }
        }    
            
        
            
        
            
        
