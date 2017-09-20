/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$(document).ready(function () {
    $("#register").click(function () {
        var lastname = $("#lastname").val();
        var firstname = $("#firstname").val();
        var username = $("#username").val();
        var password = $("#password").val();
        var confirmpassword = $("#confirmpassword").val();
        if (lastname === "") {
            $("#popuplastname").popup("open");
        } else if (firstname === "") {
            $("#popupfirstname").popup("open");
        } else if (username === "") {
            $("#popupemailaddress").popup("open");
        } else if (password === "") {
            $("#popuppassword").popup("open");
        } else if ((confirmpassword === "") || (confirmpassword !== password)) {
            $("#popupconfirmpassword").popup("open");
        } else {
            var userdata = '{';
            userdata += '"email_address"' + ':"' + username + '",';
            userdata += '"first_name"' + ':"' + firstname + '",';
            userdata += '"last_name"' + ':"' + lastname + '",';
            userdata += '"password"' + ':"' + password + '"';
            userdata += '}';
            $.ajax({
                type: "POST",
                url: "/cars/register",
                data: userdata,
                contentType: "application/json; charset=utf-8",
                crossDomain: true,
                dataType: "json",
                success: parse,
                error: function (e) {
                    alert(e);
                }
            });
        }
    });

    function parse(json) {
        if (json.status !== "0") {
            window.location.href = "/cars/main";
        }
    }
    ;
});
