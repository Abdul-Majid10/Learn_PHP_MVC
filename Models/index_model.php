<?php

class IndexModel
{

    private $message = "Welcome to Home Page";

    function __construct()
    {
    }

    public function welcomeMessage()
    {
        return $this->message;
    }

    public function get_all_products_stmt()
    {
        $conn = new Connection();
        $stmt = $conn->getPdo()->query("SELECT * FROM `product`");
        return $stmt;
    }

    public function get_products_stmt($keyword)
    {
        $conn = new Connection();
        $stmt = $conn->getPdo()->query("SELECT * FROM `product` WHERE Title Like '%$keyword%'");
        return $stmt;
    }
}
