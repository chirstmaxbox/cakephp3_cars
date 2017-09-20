/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$(document).ready(function () {
    $("#car_select").bind("change", function (event, ui) {
        var optionSelected = $(this).find('option:selected');
        var optValueSelected = optionSelected.val();
        window.location = "/cars/product/" + optValueSelected;
    });
});
