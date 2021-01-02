<?php

class Carrinho
{
    private Array $produtos;

    /**
     * Adiciona Produto
     *
     * @param Produto $item
     * @return Array
     */
    public function add(Produto $item)
    {
        return $this->produtos[] = $item;
    }

    /**
     * Retorna Produto
     *
     * @return Array
     */
    public function getProtudo()
    {
        return $this->produtos;
    }
}
