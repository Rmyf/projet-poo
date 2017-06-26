<html>
    <head>
        <title>backery</title>
    </head>
    <body>
        <h1>BACKERY</h1>             
    </body>
</html>



<?php
include_once './Cake.php';
include_once './ApplePie.php';
include_once './Brownie.php';
include_once './Cheesecake.php';

$stock=[new Cheesecake()];
$stock []= new ApplePie();
$stock []= new Brownie();


foreach ($stock as $c){
    
echo $c.'<br/>';
echo '<img src= "'.$c->picture.'" alt="img">';

foreach ($c->ingredients as $ing){
echo $ing;
}
}
