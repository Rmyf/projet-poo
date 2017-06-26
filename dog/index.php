<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
         include_once './PetitChien.php';
         $chien1 = new PetitChien();
         $chien1->nom = 'rex';
         $chien1-> race= 'labrador';
         $chien1 ->couleur= 'marron';
         $chien1->DateDeNaissance= '20/06/2016';
         
         
         foreach ($chien1 as  $feature)
             echo $feature .' ';
         $chien1 ->aboyer();
         
         echo $chien1;
         
         
         
         
        ?>
        
    </body>
</html>
