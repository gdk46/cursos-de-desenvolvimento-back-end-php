<?php

require "ContaBancaria.class.php";
require "Pessoa.class.php";

$c = new ContaBancaria(123, 010, 999999999);
// echo $c->getContaBancaria();
//var_dump($a);

$p = new Pessoa("Marco", $c);
echo $p->getConta()->getContaBancaria();