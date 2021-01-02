<?php

class Carro extends Veiculo
{
    public int $porta = 4;  
    
    public function abrirPortas()
    {
        echo "portas abertas...";
    }

}