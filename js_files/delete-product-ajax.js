$(document).ready(function () {
    $("#btn").on('click', function (e) {
        e.preventDefault();
        var P_ID = $("#P_ID").val();
        $.ajax({
            type: "POST",
            url: "/learn_PHP_MVC/delete/runDelPro",
            data: { P_ID: P_ID },
            //dataType: "dataType",
            success: function (response) {
                if (response) {
                    alert("Product Deleted successfully. Window will load in 1 sec");
                    setTimeout(function () { window.location.reload(); }, 1000);
                } else {
                    alert("Please check you feild it must be filled and if it is filled then The product of this id will not exist.");
                }
            }
        });
    });
});
