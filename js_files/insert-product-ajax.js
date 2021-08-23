$(document).ready(function () {
    $("#btn").on("click", function (e) {
        e.preventDefault();
        var P_Title = $("#P_Title").val();
        var P_Color = $("#P_Color").val();
        var P_Price = $("#P_Price").val();
        var P_Quantity = $("#P_Quantity").val();
        $.ajax({
            type: "POST",
            url: "/learn_PHP_MVC/addProduct/runAddPro",
            data: { P_Title: P_Title, P_Color: P_Color, P_Price: P_Price, P_Quantity: P_Quantity },
            //dataType: "dataType",
            success: function (DATA) {
                if (DATA) {
                    alert("Form is SUBMITTED window will load in 1 sec");
                    setTimeout(function () { window.location.reload(); }, 1000);
                } else {
                    alert("Form is NOT SUBMITTED. There is some error. Please check all feild. And must fill all feilds");
                }
            }
        });
    });
});