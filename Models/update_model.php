<?php

class UpdateModel
{
    private $variable;

    function __construct()
    {
    }

    public function checkProExist($id)
    {
        $conn = new Connection();
        $res = $conn->getPdo()->query("SELECT * FROM Product WHERE Product_ID = $id");
        if ($res->rowCount() > 0) {
            $row = $res->fetch(PDO::FETCH_ASSOC);
            return $row;
        } else {
            echo "There is no Product of Product ID : " . $id;
            return false;
        }
    }

    public function statementExe($id, $title, $color, $price, $qty)
    {
        $sql = "UPDATE Product  
                SET Title = :title,
                    Color = :color,
                    Price = :price,
                    Quantity = :qty
                WHERE Product_ID = $id";
        $conn = new Connection();
        $stmt = $conn->getPdo()->prepare($sql);
        $stmt->execute(array(
            ':title' => $title, //$_POST['P_Title'],
            ':color' => $color, //$_POST['P_Color'],
            ':price' => $price, //$_POST['P_Price'],
            ':qty' => $qty, //$_POST['P_Quantity']
        ));

        echo "Product Updated";
    }
}
