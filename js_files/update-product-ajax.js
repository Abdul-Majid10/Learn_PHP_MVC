$(document).ready(function () {
    $("#btn").on('click', function (e) {
        e.preventDefault();
        var P_ID = $("#P_ID").val();
        $.ajax({
            type: "POST",
            url: "/learn_PHP_MVC/update/showProData",
            data: { P_ID: P_ID },
            // dataType: "dataType",
            success: function (response) {
                // alert(response);
                // console.log(response[status]);
                // console.log(response[form_data]);
                // console.log(response);
                if (response) {
                    $("#btn-f2").on('click', function (e) {
                        e.preventDefault();

                        var P_ID = $("#P_ID").val();
                        var P_Title = $("#P_Title").val();
                        var P_Color = $("#P_Color").val();
                        var P_Price = $("#P_Price").val();
                        var P_Quantity = $("#P_Quantity").val();

                        $.ajax({
                            type: "POST",
                            url: "/learn_PHP_MVC/update/updatePro",
                            data: { P_ID: P_ID, P_Title: P_Title, P_Color: P_Color, P_Price: P_Price, P_Quantity: P_Quantity },
                            // dataType: "dataType",
                            success: function (response) {
                                if (response) {
                                    alert("Product is Update seccufully. Window will load in 1 sec");
                                    setTimeout(function () { window.location.reload(); }, 1000);
                                } else {
                                    alert("Product is NOT Updated. There is some error. Please check all feild. And must fill all feilds");
                                }
                            }
                        });
                    });

                } else {
                    alert("Please check you feild it must be filled and if it is filled then The product of this id will not exist.");
                }
            }
        });

    });
});