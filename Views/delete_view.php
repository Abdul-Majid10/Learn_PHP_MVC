<?php include 'php_files/header.php'; ?>

<?php

class DeleteView
{
    private $model;
    private $controller;

    function __construct($controller, $model)
    {
        $this->controller = $controller;
        $this->model = $model;

?>

        <body>
            <h1>Delete Product</h1>
            <div class="forms">
                <form action="/learn_PHP_MVC/delete/runDelPro" method="GET">
                    <label for="P_ID">Product ID: </label>
                    <input type="text" id="P_ID" name="P_ID">
                    <div id="submit-btn">
                        <input type="submit" id="btn" value="Delete">
                    </div>
                </form>
            </div>
        </body>

<?php
    }

    public function runDelPro()
    {
        return $this->controller->delPro();
    }
}
