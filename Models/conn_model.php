<?php

class Connection
{
    private $pdo;

    function __construct()
    {
        $this->pdo = new PDO("mysql:host=localhost;dbname=DBphpMVC", "root", "");
        $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }

    public function getPdo()
    {
        return $this->pdo;
    }
}
