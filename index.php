<?php
require_once 'animal.php';
require 'frog.php';
require 'ape.php';

$sheep = new Animal("shaun");

echo "Name : " . $sheep->name; // "shaun"
echo "Legs : " . $sheep->legs; // 4
echo "Cold Blooded : " . $sheep->cold_blooded; // "no"
echo "<br>";

$kodok = new frog("buduk");
echo "Name : " . $kodok->name;
echo "Legs : " . $kodok->legs;
echo "Cold Blooded : " . $kodok->cold_blooded; 
$kodok->jump() ; // "hop hop"
echo "<br>";
echo "<br>";

$sungokong = new Ape("kera sakti");
echo "Name : " . $sungokong->name;
echo "Legs : " . $sungokong->legs;
echo "Cold Blooded : " . $sungokong->cold_blooded;
$sungokong->yell() ; // "Auooo"
echo "<br>";
echo "<br>";
?>