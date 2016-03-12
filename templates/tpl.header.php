<?php
/**
 * Created by PhpStorm.
 * User: dimit
 * Date: 12.3.2016 г.
 * Time: 18:44
 */

function tplHeader($title) { ?>
    <!doctype html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta content="True" name="HadheldFriendly">
        <meta name="theme-color" content="crimson">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
        <meta name="viewport" content="width=device-width" />
        <meta name="mobile-web-app-capable" content="yes">
        <meta name="apple-mobile-web-app-capable" content="yes">
        <title><?=$title;?></title>
        <link rel="stylesheet" href="css/main.css">
        <link rel="stylesheet" href="css/piemenu.css">
        <script src="js/jquery.js"></script>
        <script src="js/wheelnav.js"></script>
        <script src="js/raphael.min.js"></script>
        <script src="js/raphael.icons.min.js"></script>
        <style>
        </style>
    </head>
    <body>
    <div id="container">
        <header>
            <div class="flex">
                <div id="version" class="flexGrow shadowedText boldText">
                    WheelPhoto <span id="versionBranch">alpha</span>
                </div>

                <div id="search">
                    <input type="search">
                    <input type="submit" value="Search">
                </div>
            </div>
        </header>
        <nav id="top">
            <div class="flex" style="justify-content: space-between">
                <ul class="flex">
                    <li><a href="index.php">Начало</a></li>
                    <li><a class="nyi" href="#">Събития</a></li>
                    <li><a class="nyi" href="#">Класации</a></li>
                    <li class="dropdown"><a class="nyi" href="#">Профили</a>
                        <ul class="dropdownNav">
                            <li><a class="nyi" href="">Модели</a></li>
                            <li><a class="nyi" href="">Фотографи</a></li>
                            <li><a class="nyi" href="">Стилисти</a></li>
                            <li><a class="nyi" href="">Гримьори</a></li>
                            <li><a class="nyi" href="">Дизайнери</a></li>
                            <li><a class="nyi" href="">Коафьори</a></li>
                        </ul>
                    </li>
                </ul>

                <ul class="flex justifyEnd">
                    <li><a class="nyi" href="">Username</a></li>
                    <li>[<a class="nyi" href="#">Изход</a>]</li>

                    <li><a href="login.php">Вход</a></li>
                    <li><a href="register.php">Регистрация</a></li>

                    <li class="loginForm">
                        <!--<input type="email" placeholder="И-мейл">-->
                        <!--<input type="password" placeholder="Парола">-->
                        <!--<input type="submit" value="Вход">-->
                    </li>
                </ul>
            </div>
        </nav>
<?php }