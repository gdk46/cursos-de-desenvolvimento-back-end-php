<?php


class PessoaDao
{
    private $pdo;

    public function __construct()
    {
        $this->pdo = new PDO('mysql:host=localhost;dbname=dao;charset=utf8','root', '');
    }


    /**
     * Undocumented function
     *
     * @return Array
     */
    public function getAll(): Array
    {
        $sql = "SELECT * FROM pessoa";
        $result = $this->pdo->query($sql);

        while($row = $result->fetchObject('PessoaDto')){
            $arrRetorno[] = $row;
        }

        return $arrRetorno;
    }
}