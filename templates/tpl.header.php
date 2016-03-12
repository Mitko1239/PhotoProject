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
        <link rel="stylesheet" href="test/main.css">
        <script src="old/js/jquery.js"></script>
        <script src="test/wheelnav.js"></script>
        <script src="test/raphael.min.js"></script>
        <script src="test/raphael.icons.min.js"></script>
        <style>
            #piemenu > svg { width: 100%; height: 100%; }
            #piemenu { height: 400px; width: 400px; /*margin:auto;*/ }
            @media (max-width: 400px) { #piemenu { height: 300px; width: 300px; } }

            [class|=wheelnav-piemenu-slice-basic] { fill: crimson; stroke: none; }
            [class|=wheelnav-piemenu-slice-selected] { fill: crimson; stroke: none; }
            [class|=wheelnav-piemenu-slice-hover] { fill: crimson;  stroke: none; fill-opacity: 0.77; cursor: pointer; }

            [class|=wheelnav-piemenu-title-basic] { fill: #333; stroke: none; }
            [class|=wheelnav-piemenu-title-selected] { fill: #fff; stroke: none; }
            [class|=wheelnav-piemenu-title-hover] { fill: #222; stroke: none; cursor: pointer; }

            .wheelnav-piemenu-spreader-in,
            .wheelnav-piemenu-spreader-out { fill: #444; stroke: #444; stroke-width: 2; cursor: pointer; }
            .wheelnav-piemenu-spreadertitle-in,
            .wheelnav-piemenu-spreadertitle-out { fill: #eee; stroke: #444; cursor: pointer; }
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