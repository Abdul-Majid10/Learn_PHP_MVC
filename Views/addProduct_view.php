<?php require 'php_files/header.php'; ?>

<?php
class AddProductView
{
    private $model;
    private $controller;

    function __construct($controller, $model)
    {
        $this->controller = $controller;
        $this->model = $model;

?>

        <body>
            <h1>Add Product</h1>
            <div class="forms">
                <form action="/learn_PHP_MVC/addProduct/runAddPro" method="POST">
                    <label for="P_Title">Product Title: </label>
                    <input type="text" id="P_Title" name="P_Title">
                    <br>

                    <label for="P_Color">Color: </label>
                    <input type="text" id="P_Color" name="P_Color">
                    <br>

                    <label for="P_Price">Price: </label>
                    <input type="text" id="P_Price" name="P_Price">
                    <br>

                    <label for="P_Quantity">Quantity: </label>
                    <input type="text" id="P_Quantity" name="P_Quantity">
                    <div id="submit-btn">
                        <input type="submit" id="btn" value="Submit">
                    </div>
                </form>
            </div>
        </body>

<?php
    }
    public function runAddPro()
    {
        return $this->controller->addPro();
    }
}
?>