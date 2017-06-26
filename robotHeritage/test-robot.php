<?php
include_once './Robot.php';
include_once './RobotMenager.php';
include_once './RobotSerpillere.php';

$robot1 = new  Robot(1);
echo $robot1-> saluer();

$robotMenager = new RobotSerpillere(2);
echo "<p>".$robotMenager->saluer()."<p>";
echo "<p>" .$robotMenager ->faireLeMenage()."</p>";
