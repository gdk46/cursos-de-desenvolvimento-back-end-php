<?php

class Produto
{
    private string $nome;
    private float $valor;
    private string $descricao;

    public function __construct(String $nome, float $valor, String $descricao)
    {
        $this->nome      = $nome;
        $this->valor     = $valor;
        $this->descricao = $descricao;
    }

    /**     
     * @return String
     */
    public function getNome()
    {
       return $this->nome;
    }

    /**     
     * @return String
     */
    public function getValor()
    {
        return $this->valor;
    }

    /**     
     * @return String
     */
    public function getDescricao()
    {
        return $this->descricao;
    }
}