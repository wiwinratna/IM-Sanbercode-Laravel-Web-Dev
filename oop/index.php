<?php
require_once "animal.php";
require_once "frog.php";
require_once "ape.php";

// Animal
$sheep = new Animal("Shaun");
echo "Name : {$sheep->name}<br>";
echo "legs : {$sheep->legs}<br>";
echo "cold blooded : {$sheep->cold_blooded}<br><br>";

// Frog
$kodok = new Frog("Buduk");
echo "Name : {$kodok->name}<br>";
echo "legs : {$kodok->legs}<br>";
echo "cold blooded : {$kodok->cold_blooded}<br>";
echo "Jump : ";
$kodok->jump();
echo "<br>";

// Ape
$sungkong = new Ape("Kera Sakti");
echo "Name : {$sungkong->name}<br>";
echo "legs : {$sungkong->legs}<br>";
echo "cold blooded : {$sungkong->cold_blooded}<br>";
echo "Yell : ";
$sungkong->yell();
?>


