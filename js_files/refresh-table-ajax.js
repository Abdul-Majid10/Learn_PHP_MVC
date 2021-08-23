$(document).ready(function () {
    $("#r-btn").on('click', function (e) {
        $.ajax({
            type: "POST",
            url: "/learn_PHP_MVC/index/show_all_products",
            // data: "data",
            // dataType: "dataType",
            success: function (response) {
                $("#product-table").html(response);
                $("#P_keyword").val(null);
            }
        });
    });
});