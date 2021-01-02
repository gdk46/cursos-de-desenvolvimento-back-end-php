<?php

class Pessoa
{
    
    private string $nome;
    private int $idade;


    public function __construct(string $nome, int $idade)
    {
        $this->nome = $nome;
        $this->idade = $idade;
    }


    public function __get($name)
    {
        return $this->$name;
    }

    public function __set($name, $value)
    {
        return $this->$name = $value;
    }

    /* 
    public function __destruct()
    {
        return "destruido";   
    } */
}