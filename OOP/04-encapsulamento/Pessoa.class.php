<?php

class Pessoa
{
    // todos os filhos podem alterar
    protected string $nome;

    // somente a classe pode alterar 
    private int $idade;

    public function setNome(string $nome)
    {
        return $this->nome = $nome;
    }
    

    public function setIdade(int $idade)
    {
        return $this->idade = $idade;
    }
}