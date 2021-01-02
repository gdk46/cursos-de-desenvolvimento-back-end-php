<?php

require "Pessoa.class.php";

$p = new Pessoa();
$p->setNome("Azul marinho");
$p->setIdade(100);
echo $p->getNome()." ".$p->getIdade();

var_dump($p);