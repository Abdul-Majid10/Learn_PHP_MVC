$(document).ready(function () {
    $("#search-btn").on('click', function (e) {
        e.preventDefault();
        var P_keyword = $("#P_keyword").val();
        $.ajax({
            type: "POST",
            url: "/learn_PHP_MVC/index/show_products",
            data: { P_keyword: P_keyword },
            //dataType: "dataType",
            success: function (response) {
                $("#product-table").html(response);
            }
        });
    });
});