$(document).ready(function () {
    $("#r-btn").on('click', function (e) {
        $.ajax({
            type: "POST",
            url: "/learn_PHP_MVC/index/index",
            // data: "data",
            // dataType: "dataType",
            success: function (response) {
                
            }
        });
    });
});