<?php

require "Animal.class.interface.php";

require "Pessoa.class.php";
require "Gato.class.php";
require "Cachorro.class.php";
require "Tartaruga.class.php";
require "Piriquito.class.php";


$cat = new Gato();
$dog = new Cachorro();
$turtle = new Tartaruga();
$parakeet = new Piriquito();

$p = new Pessoa();
$p->addAnimalEstimacao($cat);
$p->addAnimalEstimacao($dog);
$p->addAnimalEstimacao($turtle);
$p->addAnimalEstimacao($parakeet);

echo "<pre>";
print_r($p->showAnimalEstimacao());