<?php

class AddProductModel
{

    private $sql;

    function __construct()
    {
    }

    public function statementExe($title, $color, $price, $qty)
    {
        $sql = "INSERT INTO Product (Title, Color, Price, Quantity)
        VALUES (:title, :color, :price, :qty)";
        $conn = new Connection();
        $stmt = $conn->getPdo()->prepare($sql);
        $stmt->execute(array(
            ':title' => $title, //$_POST['P_Title'],
            ':color' => $color, //$_POST['P_Color'],
            ':price' => $price, //$_POST['P_Price'],
            ':qty' => $qty, //$_POST['P_Quantity']
        ));

        echo "Submitted";
    }
}
