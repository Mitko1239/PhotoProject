<?php
/**
 * Created by PhpStorm.
 * User: dimit
 * Date: 7.3.2016 г.
 * Time: 15:47
 */

function tplHeader($title) {
    $loggedIn = true; //dev
    ?>
    <!doctype html>
    <html lang="bg">
    <head>
        <meta charset="UTF-8">
        <title><?=$title;?></title>
        <link rel="stylesheet" href="css/style.css">
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