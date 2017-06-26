<?php

include_once '.Employe.php';

$employe = new Employe ('Bobson',
        'Bob',
        40,
        'Nevada',
        new DateTime('2014-04-02'),
        3000);

echo $employe->anciennete();
echo '<br//>';
echo $employe-> getSalaire() . '€';
echo '<br/>';
$employe -> augmentation();
echo $employe -> getSalaire() .'€';



        
        
        
        
        
      
