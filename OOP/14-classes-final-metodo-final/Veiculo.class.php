<?php

class Veiculo
{
    public string $cor;

    final public function pintar(string $cor)
    {
        return $this->cor = $cor;
    }
    
}