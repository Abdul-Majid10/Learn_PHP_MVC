<?php require 'php_files/header.php'; ?>

<?php
class UpdateView
{
    private $model;
    private $controller;
    private $res;

    function __construct($controller, $model)
    {
        $this->controller = $controller;
        $this->model = $model;

?>

        <body>
            <h1>Update Product</h1>

            <div class="forms">

                <form action="/learn_PHP_MVC/update/showProData" method="GET">
                    <label for="P_Title">Product ID: </label>
                    <input type="text" id="P_ID" name="P_ID">

                    <div id="submit-btn">
                        <input type="submit" id="btn" value="Submit">
                    </div>
                </form>
            </div>
        </body>

        <?php
    }

    public function updatePro()
    {
        $this->controller->updateProduct();
    }

    public function showProData()
    {
        $this->res = $this->controller->checkProductExist();
        if ($this->res != false) {

        ?>
            <div class="forms">

                <form action="/learn_PHP_MVC/update/updatePro" method="POST">
                    <label for="P_Title">Product ID: </label>
                    <input type="text" id="P_ID" name="P_ID" value="<?= $this->res['Product_ID'] ?>" readonly>
                    <br>

                    <label for="P_Title">Product Title: </label>
                    <input type="text" id="P_Title" name="P_Title" value="<?= $this->res['Title'] ?>">
                    <br>

                    <label for="P_Color">Color: </label>
                    <input type="text" id="P_Color" name="P_Color" value="<?= $this->res['Color'] ?>">
                    <br>

                    <label for="P_Price">Price: </label>
                    <input type="text" id="P_Price" name="P_Price" value="<?= $this->res['Price'] ?>">
                    <br>

                    <label for="P_Quantity">Quantity: </label>
                    <input type="text" id="P_Quantity" name="P_Quantity" value="<?= $this->res['Quantity'] ?>">
                    <div id="submit-btn">
                        <input type="submit" id="btn" value="Update">
                    </div>
                </form>
            </div>

<?php

        }
    }
}
?>