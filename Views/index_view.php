<?php
class IndexView
{

    private $model;
    private $controller;

    function __construct($controller, $model)
    {
        $this->controller = $controller;
        $this->model = $model;
    }

    public function index()
    {
        require 'php_files/header.php';
        require 'php_files/search.php';
        require 'php_files/refresh.php';
    }

    public function get_all_products_stmt()
    {
        return $this->controller->get_all_products_stmt();
    }

    public function get_products_stmt()
    {
        return $this->controller->get_products_stmt();
    }

    public function show_products()
    {

        $output = "";

        $output .= "<table  border='2px' cellspacing='0px' cellpadding='5px'>
            <tr>
                <th>Product ID</th>
                <th>Title</th>
                <th>Color</th>
                <th>Price</th>
                <th>Quantity</th>
            </tr>";
        $stmt = $this->get_products_stmt();

        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $output .= "<tr><td>" . $row['Product_ID'] . "</td><td>" . $row['Title'] . "</td><td>" . $row['Color'] . "</td><td>" .
                $row['Price'] . "</td><td>" . $row['Quantity'] . "</td><tr>\n";
        }
        $output .= " </table>";

        return $output;
    }


    public function show_all_products()
    {

        $output = "";

        $output .= "<table  border='2px' cellspacing='0px' cellpadding='5px'>
            <tr>
                <th>Product ID</th>
                <th>Title</th>
                <th>Color</th>
                <th>Price</th>
                <th>Quantity</th>
            </tr>";
        $stmt = $this->get_all_products_stmt();

        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $output .= "<tr><td>" . $row['Product_ID'] . "</td><td>" . $row['Title'] . "</td><td>" . $row['Color'] . "</td><td>" .
                $row['Price'] . "</td><td>" . $row['Quantity'] . "</td><tr>\n";
        }
        $output .= " </table>";

        return $output;
    }
}
