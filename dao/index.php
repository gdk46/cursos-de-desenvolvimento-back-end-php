<?php

require "Pessoa.php";
require "PessoaDao.php";
require "PessoaDto.php";

$p = new Pessoa();
var_dump($p->all());