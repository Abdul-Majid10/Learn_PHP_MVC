<?php

class DeleteModel
{

    private $sql;

    function __construct()
    {
    }

    public function statementExe($id)
    {

        $sql = "SELECT COUNT(*) FROM Product WHERE Product_ID = $id";

        $conn = new Connection();
        $res = $conn->getPdo()->query($sql);
        if ($res->fetchColumn() > 0) {
            $finalSql = "DELETE FROM Product WHERE Product_ID = $id";
            $res = $conn->getPdo()->query($finalSql);
            echo "Product Deleted successfully.";
        } else {
            echo "There is no Product of Product ID : " . $id;
        }
    }
}
