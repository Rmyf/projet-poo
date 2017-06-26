<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of PetitChien
 *
 * @author tal
 */
class PetitChien {
    public $nom ;
    public $race ;
    public $DateDeNaissance;
    public $couleur;
    
    public function aboyer(){
        echo 'waf waf waf ';
    }
    
    public function __toString() {
        return 'mon nom est '.$this->nom. 
               ', ma race est '.$this->race.
               ', je suis né en '.$this->DateDeNaissance.
               ', et ma couleur est '.$this->couleur.'.';}
    
public function __construct($nom, $race, $date, $couleur){
    $this->nom = $nom;
    $this->race = $race;
    $this->DateDeNaissance = $date;
    $this->couleur = $couleur;
            
    }
        
                
}
