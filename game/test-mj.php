<?php

include_once './MaitreJeu.php';
include_once './Personnage.php';

if (isset ($_SESSION['mj'])){
    $mj = $_SESSION['mj'];
    
}else{
    
    if(filter_has_var(INPUT_POST, 'attack')) {
    $mj->attack();
}
  
    
    if(filter_has_var(INPUT_POST, 'defence')){
        $mj->defence();
        
    }
    
    eco $mj->affichage
    
}