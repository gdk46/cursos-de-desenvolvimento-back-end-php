<?php

require "Caneta.class.php";

$c = new Caneta();
// var_dump($c);
$c->cor = "Azul marinho";
$c->expessura = 1.5;
$c->escrever();


var_dump($c);