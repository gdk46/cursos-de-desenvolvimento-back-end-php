<?php

class ContaBancaria
{
    private string $operacao;
    private string $agencia;
    private string $conta;

    public function __construct($operacao, $agencia, $conta)
    {
        $this->operacao = $operacao;
        $this->agencia  =  $agencia;
        $this->conta    =    $conta;
    }


    public function getContaBancaria()
    {
        return $this->operacao. " " . $this->agencia . " " . $this->conta;
    }
}