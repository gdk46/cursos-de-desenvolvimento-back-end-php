<?php

require "Veiculo.class.php";
require "Carro.class.php";
require "Moto.class.php";
require "Aviao.class.php";

$c = new Carro();
echo "---Carro---<br/>";
echo $c->cor."<br/>";
$c->ligar();
echo "<br/>";
$c->desligar();
echo "<br/>";
$c->abrirPortas();
echo "<br/>";
echo "<br/>";



$m = new Moto();
echo "---Moto---<br/>";
echo $m->cor."<br/>";
$m->embarcar();
echo "<br/>";
$m->ligar();
echo "<br/>";
$m->desligar();
echo "<br/>";
echo "<br/>";



$a = new Aviao();
echo "---Aviao---<br/>";
echo $a->cor."<br/>";
$a->ligar();
echo "<br/>";
$a->checkpoint();
echo "<br/>";
$a->autorizacaoVoo();
echo "<br/>";
$a->voar();
echo "<br/>";
$m->desligar();
