/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$(document).ready(function () {
    function parse(json) {
        var val = json.status;
        if (val === "0") {
            $("#popuploginerror").popup("open");
        } else {
            var url = "/cars/product/1";
            window.location = url;
        }
    }
    ;

    $("#login").click(function () {
        var username = $("#username").val();
        var password = $("#password").val();
        if (username === "" || password === "") {
            $("#popuploginerror").popup("open");
        } else {
            var userdata = '{';
            userdata += '"emailaddress"' + ':"' + username + '",';
            userdata += '"password"' + ':"' + password + '"';
            userdata += '}';
            $.ajax({
                type: "POST",
                url: "/cars/main",
                data: userdata,
                contentType: "application/json; charset=utf-8",
                crossDomain: true,
                dataType: "json",
                success: parse,
                error: function (e) {
                    alert("Error is " + e);
                }
            });
        }
    });
});


