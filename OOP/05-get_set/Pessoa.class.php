<?php

class Pessoa
{
    
    private string $nome;
    private int $idade;




    public function getNome()
    {
        return $this->nome;
    }

    public function setNome(string $nome)
    {
        return $this->nome = $nome;
    }

    
    public function getIdade()
    {
        return $this->idade;
    }
    
    public function setIdade(int $idade)
    {
        return $this->idade = $idade;
    }
}