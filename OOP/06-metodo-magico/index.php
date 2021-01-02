<?php

require "Pessoa.class.php";

$p = new Pessoa("Gleisson", 19);
echo $p->nome." ".$p->idade;

var_dump($p);