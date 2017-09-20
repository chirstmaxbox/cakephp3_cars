<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
?>

<!DOCTYPE html> 
<html>
    <head>
        <title>Detail</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css" />
        <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
        <script src="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>
        <link rel="stylesheet" href="http://demos.jquerymobile.com/1.4.0/theme-classic/theme-classic.css" />
        <?= $this->Html->css('mystyle.css') ?>
    </head>

    <body>
        <div data-role="page" id="page1" data-theme="e">
            <div data-role="header">
                <a id="alink" href="#" rel="external" class="ui-btn ui-corner-all ui-icon-back ui-btn-icon-notext">Back Icon</a>
                <h1>Description</h1>
            </div>
            <div role="main" class="ui-content">
                <img src="/img/<?= $img ?>" />
                <h1><?= $title ?></h1>
                <p><?= $description ?></p>
                <h4>Price: <?= $price ?></h4>
                <h4>Quantity: <?= $quantity ?></h4>
                <div id="button_wrap">
                    <input type="button" id="add_my_cart" value="Add to My Cart"/>
                </div>
            </div>
            <div data-role="popup" id="popup_successfully">
                <p>Successfully to add an item to My Cart</p>
            </div>
            <div data-role="popup" id="popup_failed">
                <p>Failed to add an item to My Cart</p>
            </div>
        </div>
    </body>
</html>

