<?php

require "Animal.class.php";
require "Cobra.class.php";
require "Cachorro.class.php";


$snake = new Cobra();
$dog   = new Cachorro();

echo "<pre>";

echo $snake->organimos()."<br/>";
echo $snake->locomover()."<br/>";

echo $dog->organimos()."<br/>";
echo $dog->locomover()."<br/>";

// print_r();