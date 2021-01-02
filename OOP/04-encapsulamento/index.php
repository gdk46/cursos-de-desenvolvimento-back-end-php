<?php

require "Pessoa.class.php";

$p = new Pessoa();
echo $p->setNome("Azul marinho");
echo $p->setIdade(100);


//var_dump($p);