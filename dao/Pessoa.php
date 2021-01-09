<?php

class Pessoa
{
    private $dao;

    public function __construct()
    {
        $this->dao = new PessoaDao();
    }

    public function all()
    {
        $arrPessoa = $this->dao->getAll();
        foreach($arrPessoa as $pessoas){
            echo "{$pessoas->id} - {$pessoas->nome}<br/>";
        }
    }
}