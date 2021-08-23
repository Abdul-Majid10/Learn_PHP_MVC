<body>
    <h1>Add Product</h1>
    <div class="forms">
        <!-- <form action="/learn_PHP_MVC/addProduct/runAddPro" method="POST"> -->
        <form>
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
            <div id="submit-btn" class="center">
                <input type="submit" id="btn" value="Submit">
            </div>
        </form>
    </div>

    <script type="text/javascript" src="/learn_PHP_MVC/js_files/insert-product-ajax.js"></script>
</body>