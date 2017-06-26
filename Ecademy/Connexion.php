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
        
        session_start();

if (isset($_SESSION['utilisateur'])){
echo 'Salut,'.$_SESSION['utilisateur'].'<br/>';

echo '<a href="logout.php">Deconnexion</a>';

}
else{
    echo '<form action="login.php" method="POST">
        <label>Pseudo</label>
        <input type="text" name="pseudo">
        <label>Password</label>
        <input type="password" name="mdp">
        <button>Connexion</button>  
    </form>';
}
        ?>
    </body>
</html>
