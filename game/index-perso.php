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
       
        include_once './Personnage.php';
        include_once './Soigneur.php';
        
        session_start();
         
        if (isset($_SESSION['monperso']) 
            && isset($_SESSION['adversaires'])) {
        
            
            $monperso = $_SESSION['monperso'];
            $adversaires = $_SESSION['adversaires'];
    } else {
            
            
           
      $monperso = new Soigneur(200, 50, 100," bobby");
      $adversaires = new Personnage(150, 30, 80, "bobo");}
      
        if(isset($_POST['attaque'])){
         $monperso->attack($adversaires);
     }
     
        if(isset($_POST['defense'])){ 
             $monperso->defence();
     }
             
      
     
        echo $adversaires ->generateHtml();
        

       $adversaires->attack($monperso);
       echo $monperso ->generateHtml();
       
       $monperso ->soigner($monperso);
       
       echo $monperso ->generateHtml();
       
          
       
       $_SESSION['monperso'] =$monperso;
       $_SESSION['adversaires'] = $adversaires;		  
      
             
        ?>
        
        
        <form method="POST">
    <button name="attaque">Attaquer</button>
    <button name="defense">Défendre</button>
        </form> 
        
    </body>
</html