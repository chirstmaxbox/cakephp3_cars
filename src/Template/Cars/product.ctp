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
        <title>Toyota</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css" />
        <link rel="stylesheet" href="http://demos.jquerymobile.com/1.4.0/theme-classic/theme-classic.css" />
        <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
        <script src="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>
        <?= $this->Html->css('mystyle.css') ?>
        <?= $this->Html->script('producthandler.js') ?>
    </head>

    <body>
        <div data-role="page" id="pageone" data-theme="e">
            <div data-role="header">
                <h1 id="nameid">Welcome <?= $firstname ?></h1>
                <a id="alink" href="/cars/logout" rel="external" class="ui-btn ui-btn-right ui-corner-all ui-icon-power ui-btn-icon-notext" title="Logout">Back Icon</a>
            </div>
            <div>
                <div data-role="main" class="ui-content">
                    <div class="left_float quarter_width">
                        <div class="full_width auto_margin">
                            <img class="full_width full_height" src="/img/avatar.png"/>
                        </div>
                    </div>
                    <div class="left_float thirdquarter_width">
                        <div class="ui-field-contain fifteen_margin_left">
                            <label for="car_select"><b>Product</b></label>
                            <select name="car_select" id="car_select" data-native-menu="false">
                                <?php
                                    $count = 1;
                                    foreach($types as $type) {
                                        if($count == $select) {
                                            echo "<option value=\"" . $count . "\" selected=\"selected\">" . $type . "</option>";
                                        }
                                        else {
                                            echo "<option value=\"" . $count . "\">" . $type . "</option>";
                                        }
                                        ++$count;
                                    }
                                ?>
                            </select>
                        </div>
                    </div>
                    <div class="both_clear two_padding_top">
                        <?php if (count($cars) > 0) : ?>
                            <ul data-role="listview" data-inset="true" data-filter="true">
                        <?php endif; ?>

                        <?php
                            if (count($cars) > 0) {
                                foreach ($cars as $car) {
                                    echo "<li><a href=\"/cars/detail/$car[0]\" rel=\"external\">";
                                    echo "<img src=\"/img/" . $car[1] . "\">";
                                    echo "<h2>" . $car[2] . "</h2>";
                                    echo "<h2>" . $car[3] . "</h2>";
                                    echo "</a>";
                                    echo "</li>";
                                }
                            }
                        ?>
                                
                        <?php if (count($cars) > 0) : ?>
                            </ul>
                        <?php endif; ?>
                    </div>			
                </div>
            </div>
            <div data-role="footer" class="footer full_width">
                <div data-role="navbar">
                    <ul>
                        <li><a href="#" class="ui-btn-active ui-state-persist">Products</a></li>
                        <li><a href="#pagetwo">My Cart</a></li>
                        <li><a href="#pagethree">My Profile</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </body>
</html>
