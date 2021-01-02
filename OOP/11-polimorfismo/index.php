<?php

require   "Pai.class.php";
require "Filha.class.php";
require "Filho.class.php";


$p  = new Pai();
$fo = new Filho();
$fa = new Filha();
echo "<pre>";
echo "<br/> pai: " . $p->velocidade();
echo "<br/> Filho: " . $fo->velocidade();
echo "<br/> Filha: " . $fa->velocidade();