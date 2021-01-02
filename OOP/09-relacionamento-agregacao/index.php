<?php

require "Carrinho.class.php";
require  "Produto.class.php";

$p = new Produto(
    "Biscoito Oreo",
    3.99,
    "Biscoito Complementar para dieta"
);

$p1 = new Produto(
    "Biscoito Nutri",
    3.50,
    "Biscoito Complementar para dieta"
);

$c = new Carrinho();
$c->add($p);
$c->add($p1);

echo "<pre>";
print_r($c->getProtudo());