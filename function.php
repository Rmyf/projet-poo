<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Formulaire personne</title>
    </head>
    <body>
        
        <form action="#" method="POST">
            <h1>Inscription</h1>

            
            <label for "nom">Nom: </label>
            <input type="text" name="nom" placeholder="Nom" />

            <label for "prénom">Prénom: </label>
            <input type="text" name="prenom" placeholder="Prénom" />
            
            <label for "age">Age: </label>
            <input type="number" name= "age"min="0" max="120" />

            <label for "region"> Région:</label>
            <select name="region" Region="1">
                <option>Centre
                <option>Île-de-France
                <option>Bretagne
                <option>Normandie
                <option>Rhône-Aples
            </select>
    
    <button name='send'>Envoyer</button>
        </form>
        
            
        
        <?php
        
        if(isset($_POST['send'])){
            $post = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
            
            include_once './Personne.php';
             
  
            $instancePersonne = new Personne($post['nom'], $post['prenom'], $post['age'], $post['region']);
        
           echo'<pre>';
           var_dump($instancePersonne);
           echo '</pre>';}
          
        ?>
        
        
        
    </body>
</html>
