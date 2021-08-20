<?php
class IndexView
{

    private $model;
    private $controller;

    function __construct($controller, $model)
    {
        $this->controller = $controller;
        $this->model = $model;
        include 'php_files/header.php';
        include 'php_files/refresh.php';
    }

    public function index()
    {
        return $this->controller->sayWelcome();
    }

    public function get_all_products_stmt()
    {
        return $this->controller->get_all_products_stmt();
    }


    public function show_all_products()
    {
        echo "<table  border='2px' cellspacing='0px' cellpadding='5px'>
            <tr>
                <th>Product ID</th>
                <th>Title</th>
                <th>Color</th>
                <th>Price</th>
                <th>Quantity</th>
            </tr>";
        $stmt = $this->get_all_products_stmt();

        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            echo "<tr><td>";
            echo (htmlentities($row['Product_ID']));
            echo "</td><td>";
            echo (htmlentities($row['Title']));
            echo "</td><td>";
            echo (htmlentities($row['Color']));
            echo "</td><td>";
            echo (htmlentities($row['Price']));
            echo "</td><td>";
            echo (htmlentities($row['Quantity']));
            echo "</td><tr>\n";
        }
        echo " </table>";
    }
}
