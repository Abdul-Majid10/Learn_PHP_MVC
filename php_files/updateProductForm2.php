<div class="forms">

    <!-- <form action="/learn_PHP_MVC/update/updatePro" method="POST"> -->
    <form>
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
        <div id="submit-btn" class="center">
            <input type="submit" id="btn-f2" value="Update">
        </div>
    </form>
</div>

<script type="text/javascript" src="/learn_PHP_MVC/js_files/update-product-ajax.js"></script>