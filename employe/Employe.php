<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Employe
 *
 * @author tal
 * include
 */
include_once './Personne.php';

class Employe extends Personne{
    
    protected $dateArrivee;
    protected $salaire;
    
    
    public function __construct(string $nom, 
            string $prenom, 
            int $age, 
            $region) {
        
    
        parent::__construct($nom, $prenom, $age, $region);
        $this->dateArrivee = $dateArrivee;
        $this->salaire = $salaire;
        
    }
    
    

public function anciennete ():int {
    
}
    
    
}

public function augmentation() {


}