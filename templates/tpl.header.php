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
                    PhotoBox <span id="versionBranch">alpha</span>
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
                    <li><a class="nyi" href="#">Галерия</a></li>
                    <li><a class="nyi" href="#">Форум</a></li>
                    <li><a class="nyi" href="#">За нас</a></li>
                    <li><a class="nyi" href="#">Контакти</a></li>
                    <li><a class="nyi" href="#">Друго...</a></li>
                </ul>

                <ul class="flex justifyEnd">
                    <li><a class="nyi" href="">Username</a></li>
                    <li>[<a class="nyi" href="#">Изход</a>]</li>

                    <li><a class="nyi" href="#">Вход</a></li>
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