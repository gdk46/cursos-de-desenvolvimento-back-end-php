<?php

require "Aula.class.php";

$a = new Aula();
$a->turma = "132";
$a->aluno = "90";
var_dump($a);


$b = new stdClass();
$b->nome = "mateus";
var_dump($b);