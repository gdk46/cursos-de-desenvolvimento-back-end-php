<?php

class Pessoa
{
    private $nome;    
    private $conta;

    public function __construct($nome, $conta)
    {
        $this->conta = $conta;
        $this->nome  =  $nome;
    }

    public function getConta()
    {
        return $this->conta;
    } 
     
}