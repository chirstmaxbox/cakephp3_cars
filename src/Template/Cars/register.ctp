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
        <title>Register</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css" />
        <link rel="stylesheet" href="http://demos.jquerymobile.com/1.4.0/theme-classic/theme-classic.css" />
        <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
        <script src="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>
        <?= $this->Html->css('mystyle.css') ?>
        <?= $this->Html->script('registerhandler.js') ?>
    </head>

    <body>
        <div data-role="page" id="pageone" data-theme="e">
            <div data-role="header">
                <h1>Sign Up</h1>
            </div>
            <div>
                <div data-role="main" class="ui-content">
                    <div>
                        <div class="fourty-width auto_margin">
                            <img class="full_width full_height" src="/img/carlogo.png"/>
                        </div>
                    </div>
                    <form class="five_margin_left five_margin_right">
                        <label for="text-1"></label>
                        <input type="text" name="lastname" id="lastname" value="" placeholder="Last Name"/>
                        <label for="text-2"></label>
                        <input type="text" name="firstname" id="firstname" value="" placeholder="First Name"/>
                        <label for="text-3"></label>
                        <input type="email" name="username" id="username" value="" placeholder="Email Address"/>
                        <label for="text-4"></label>
                        <input type="password" name="password" id="password" value="" placeholder="Password"/>
                        <label for="text-5"></label>
                        <input type="password" name="confirmpassword" id="confirmpassword" value="" placeholder="Confirm Password"/>
                        <input type="button" id="register" value="Register"/>	
                    </form>				
                </div>
            </div>
            <div data-role="popup" id="popuplastname">
                <p>Invalid last name</p>
            </div>
            <div data-role="popup" id="popupfirstname">
                <p>Invalid first name</p>
            </div>
            <div data-role="popup" id="popupemailaddress">
                <p>Invalid email address</p>
            </div>
            <div data-role="popup" id="popuppassword">
                <p>Invalid password</p>
            </div>
            <div data-role="popup" id="popupconfirmpassword">
                <p>Invalid confirm password</p>
            </div>	
        </div>
    </body>
</html>

