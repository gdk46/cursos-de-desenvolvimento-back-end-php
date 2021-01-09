<?php

class PessoaDto
{
    public int $id;
    public string $nome;
    
    /**
     *
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     *      
     * @param int $id 
     * @return int
     */
    public function seId(int $id): int
    {
        return $this->id = $id;
    }


    /**
     *
     * @return String
     */
    public function getNome(): String
    {
        return $this->nome;
    }

    /**
     *      
     * @param String $name 
     * @return String
     */
    public function setNome(String $nome): String
    {
        return $this->nome = $nome;
    }
}