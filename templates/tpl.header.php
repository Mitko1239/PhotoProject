<?php
/**
 * Created by PhpStorm.
 * User: dimit
 * Date: 7.3.2016 г.
 * Time: 15:47
 */

function tplHeader($title, $layout) {
    $loggedIn = true; //dev
    ?>
    <!doctype html>
    <html lang="bg">
    <head>
        <meta charset="UTF-8">
        <title><?=$title;?></title>
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/demo.css">
        <link rel="stylesheet" href="css/component2.css">
        <script src="js/jquery.js"></script>
        <script src="js/modernizr-2.6.2.min.js"></script>
        <script src="js/polyfills.js"></script>
        <script src="js/jquery.js"></script>
        <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
        <script>
            $(function() {
                $("#tabs").tabs();
            });
        </script>
        <meta charset="utf-8">
    </head>
    <body>
    <div id="container">
        <nav id="top">
            <ul>
                <li><h3><a href="index.php">Site Name</a></h3></li>
                <?php if($layout != 'home') { ?>
                <li><input type="search" placeholder="Търсене..." /> <input type="submit" value="Go"> <input
                        type="button" value="Разширено търсене"></li>
                <?php } ?>
                <?php if($loggedIn) { ?>
                <li><a href="profile.php">Username</a></li>
                <li>[<a href="#">Изход</a>]</li>
                <?php } else { ?>
                <li><input type="email" placeholder="И-мейл"></li>
                <li><input type="password" placeholder="Парола"></li>
                <li><input type="submit" value="Вход"></li>
                <?php } ?>
            </ul>
        </nav>
    <?php
}