<?php

class UpdateModel
{
    function __construct()
    {
    }

    public function checkProExist($id)
    {
        $result = [];
        $conn = new Connection();
        $res = $conn->getPdo()->query("SELECT * FROM Product WHERE Product_ID = $id");
        if ($res->rowCount() > 0) {
            $row = $res->fetch(PDO::FETCH_ASSOC);
            /* new sceem*/
            $result['status'] = true;
            $result['form_data'] =
                "<div class='forms'>
                <form>
                    <label for='P_Title'>Product ID: </label>
                    <input type='text' id='P_ID' name='P_ID' value=' " . $row['Product_ID'] . "' readonly>
                    <br>

                    <label for='P_Title'>Product Title: </label>
                    <input type='text' id='P_Title' name='P_Title' value= '" . $row['Title'] . "'>
                    <br>

                    <label for='P_Color'>Color: </label>
                    <input type='text' id='P_Color' name='P_Color' value='" . $row['Color'] . "'>
                    <br>

                    <label for='P_Price'>Price: </label>
                    <input type='text' id='P_Price' name='P_Price' value='" . $row['Price'] . "'>
                    <br>

                    <label for='P_Quantity'>Quantity: </label>
                    <input type='text' id='P_Quantity' name='P_Quantity' value='" . $row['Quantity'] . "'>
                    <div id='submit-btn' class='center'>
                        <input type='submit' id='btn-f2' value='Update'>
                    </div>
                </form>
            </div>
        <script type='text/javascript' src='/learn_PHP_MVC/js_files/update-product-ajax.js'></script>";
        } else {
            $result['status'] = false;
        }
        return $result;
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

        // echo "Product Updated";
        return true;
    }
}
