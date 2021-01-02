<?php

class Pessoa 
{
    private array $estimacao;
    

    public function addAnimalEstimacao(Animal $animal)
    {
        return $this->estimacao[] = $animal->getAnimal();
    }

    public function showAnimalEstimacao()
    {
        return $this->estimacao;
    }
}