<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Personnage
 *
 * @author tal
 */
class Personnage {
    
    
    protected $nom;
    protected $force;
    protected $defence;
    protected $vie;
    
    public function attack ($perso){
    
    $this-> force += 10;
    $perso -> vie -= 20;}
    
    
    
    public function defence () {
        
     $this -> defence +=5;
        
    
}

    public function generateHtml() {
        return
        '<p>Nom:'  . $this->nom . '</p>'.
        '<p>Defence:' . $this->defence . '</p>'.
        '<p>Force:' . $this->force . '</p>'. 
        '<p>Vie:' . $this->vie . '</p>'. '</br>';
         
    
}
        

    function __construct($vie, $force, $defence, $nom) {
    $this->vie = $vie;
    $this->force = $force;
    $this->defence = $defence;
    $this->nom = $nom;
}


    
    
    
}
