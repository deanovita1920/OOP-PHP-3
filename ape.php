<?php
require_once 'animal.php';
class Ape Extends Animal
{
    public $legs = 2 . "<br>";
    public function yell()
    {
        echo "Yell : Auooo";
    }

}
?>