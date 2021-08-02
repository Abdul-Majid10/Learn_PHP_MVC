<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="/css/style.css"> -->
    <style>
        body {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        h1 {
            text-align: center;
        }

        .forms {
            width: 60%;
            background-color: antiquewhite;
            margin: auto;
            padding: 50px;
            border-radius: 20px;
        }

        label {
            display: inline-block;
            width: 40%;
            padding: 10px 0px;
            padding-left: 35px;
        }

        input {
            width: 50%;
            padding: 5px;
            border: 0px;
            border-radius: 10px;
        }

        #submit-btn {
            width: 100%;
            padding: 20px 0px;
            text-align: center;
        }

        #btn {
            width: 29%;
            background-color: rgb(140, 255, 117);
            font-size: 20px;
        }
    </style>
    <title>Register Students</title>
</head>
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
                <form action="/Controllers/addProduct_controller.php" method="POST">
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

</html>
<?php
    }
}
