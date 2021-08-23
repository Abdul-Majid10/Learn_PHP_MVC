$(document).ready(function () {
    function loadTable() {
        $.ajax({
            type: "POST",
            url: "/learn_PHP_MVC/index/show_all_products",
            // data: "data",
            // dataType: "dataType",
            success: function (response) {
                $("#product-table").html(response);
            }
        });
    }
    loadTable();
});