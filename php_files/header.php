<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP CRUD</title>
    <!-- <link rel="stylesheet" href="../css/style.css"> -->
    <link rel="stylesheet" href="/learn_PHP_MVC/css/style.css">
    <!-- <link rel="stylesheet" type="text/css" href="/learn_PHP_MVC/css/style.css?version=51"> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>

    <header>
        <a href="/learn_PHP_MVC" class="logo">Welcome to PHP CRUD</a>
        <div class="menu-toggle"></div>
        <nav>
            <ul id="nav-list">
                <li><a id="home-link" class="" href="/learn_PHP_MVC">Home</a></li>
                <li><a id="add-link" class="" href="/learn_PHP_MVC/addProduct/index">Add Products</a></li>
                <li><a id="update-link" class="" href="/learn_PHP_MVC/update/index">Update Products</a></li>
                <li><a id="delete-link" class="" href="/learn_PHP_MVC/delete/index">Delete Products</a></li>
            </ul>
        </nav>
        <div class="clearfix"></div>
    </header>

    <script type="text/javascript" src="/learn_PHP_MVC/js_files/jquery-3.6.0.js"></script>
    <script type="text/javascript" src="/learn_PHP_MVC/js_files/initial-load-table.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('.menu-toggle').click(function() {
                $('.menu-toggle').toggleClass('active');
                $('nav').toggleClass('active');
                // $('nav ul li a').removeClass('active')   
            })
        })

        $(document).ready(function() {
            function getEventTarget(e) {
                e = e || window.event;
                return e.target || e.srcElement;
            }

            var url = window.location.href;
            if (url == "http://localhost/learn_PHP_MVC/") {
                document.querySelector("#home-link").classList.add("active");
            } else if (url == "http://localhost/learn_PHP_MVC/addProduct/index") {
                document.querySelector("#add-link").classList.add("active");
            } else if (url == "http://localhost/learn_PHP_MVC/update/index") {
                document.querySelector("#update-link").classList.add("active");
            } else if (url == "http://localhost/learn_PHP_MVC/delete/index") {
                document.querySelector("#delete-link").classList.add("active");
            }
        })
    </script>
</body>



</html>