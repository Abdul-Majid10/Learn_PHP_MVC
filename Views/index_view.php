<?php

class IndexView
{

    private $model;
    private $controller;

    function __construct($controller, $model)
    {
        $this->controller = $controller;
        $this->model = $model;

        // print "Home - ";
    }

    // public function index()
    // {
    //     return $this->controller->sayWelcome();
    // }

    // public function action()
    // {
    //     $this->controller->takeAction();
    // }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forms testing</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>

    <header>
        <a href="#" class="logo">Welcome to PHP CRUD</a>
        <div class="menu-toggle"></div>
        <nav>
            <ul>
                <li><a href="#" class="active">Home</a></li>
                <li><a href="/learn_PHP_MVC/addProduct">Add Products</a></li>
                <li><a href="#">Update Products</a></li>
                <li><a href="#">Delete Products</a></li>
            </ul>
        </nav>
        <div class="clearfix"></div>
    </header>
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous">
    </script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('.menu-toggle').click(function() {
                $('.menu-toggle').toggleClass('active');
                $('nav').toggleClass('active');
                // $('nav ul li a').removeClass('active')   
            })
        })
    </script>
</body>

</html>