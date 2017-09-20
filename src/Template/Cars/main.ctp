<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$title = "Car Shopping";
?>

<!DOCTYPE html>
<html>
    <head>
        <title><?= $title ?></title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css" />
        <link rel="stylesheet" href="http://demos.jquerymobile.com/1.4.0/theme-classic/theme-classic.css" />
        <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
        <script src="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>
        <?= $this->Html->css('mystyle.css') ?>
        <?= $this->Html->script('loginhandler.js') ?>
    </head>
    <body>
        <div data-role="page" id="pageone" data-theme="e">
            <div data-role="header">
                <h1><?php echo $title ?></h1>
            </div>
            <div class="ten_margin_left ten_margin_right">
                <div data-role="main" class="ui-content">
                    <div>
                        <div class="seventy_width auto_margin">
                            <img class="full_width full_height" src="/img/carlogo.png"/>
                        </div>
                    </div>
                    <form>
                        <label for="text-1"></label>
                        <input type="email" name="text-1" id="username" value="" placeholder="Email Address"/>
                        <label for="text-2"></label>
                        <input type="password" name="text-2" id="password" value="" placeholder="Password"/>
                        <input type="button" id="login" value="Login"/>
                    </form>
                    <div class="center">
                        <p>Not a member? <a href="/cars/register" rel="external">Sign Up</a></p>
                    </div>					
                </div>
            </div>
            <div data-role="popup" id="popuploginerror">
                <p>Invalid email address and password</p>
            </div>			
        </div>
    </body>
</html>


