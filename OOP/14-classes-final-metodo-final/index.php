<?php

require "Veiculo.class.php";
require "Carro.class.php";


$c = new Carro();
echo $c->pintar("Branco");


/**
 * método - final e class - final
 * 
 * não permite ser compartilha ou herdadas
 * pelos seus filhos
 */