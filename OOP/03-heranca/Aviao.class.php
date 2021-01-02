<?php

class Aviao extends Veiculo
{
    public $cor = "azul";
    
    public function checkpoint()
    {
        echo "checkpoint verificado...";
    }

    public function autorizacaoVoo()
    {
        echo "Autorizado...";
    }


    public function voar()
    {
        echo "voar...";
    }
}