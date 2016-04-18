<?php
/**
 * Created by PhpStorm.
 * User: dimit
 * Date: 12.3.2016 г.
 * Time: 18:44
 */
require 'includes/connect.php';
ob_start();
function tplHeader($title)
{
    ?>
    <!doctype html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta content="True" name="HandheldFriendly">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
        <meta name="viewport" content="width=device-width" />
        <link rel="shortcut icon" type="image/gif" href="img/favicon.ico" />

        <!-- Support for Chrome merge tabs on Android Lollipop -->
        <meta name="theme-color" content="#dc143c">
        <link rel="icon" sizes="192x192" href="img/logo.png">

        <!--    More Android/iOS specific tags-->
        <meta name="mobile-web-app-capable" content="yes">
        <meta name="apple-mobile-web-app-capable" content="yes">

        <!--    Google Material Design Icons-->
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

        <title><?= $title; ?> - WheelPhoto</title>
        <link rel="stylesheet" href="css/main.css">
        <link rel="stylesheet" href="css/media.css">
        <link rel="stylesheet" href="css/piemenu.css">
        <link rel="stylesheet" href="css/lightslider.css">
        <link rel="stylesheet" href="css/slider.css">
        <script src="js/jquery.js"></script>
        <script src="js/jquery-ui.js"></script>
        <script src="js/lightslider.js"></script>
        <script>
            function jump(hash) {
                $(document.body).scrollTop($('#'+hash).offset().top);
            }
        </script>
        <script src="js/wheelnav.js"></script>
        <script src="js/raphael.min.js"></script>
        <script src="js/raphael.icons.min.js"></script>
        <style>
        </style>
    </head>
    <body>
    <div id="container">
        <header>
            <div class="flex" id="header">
                <div id="version" class="flexGrow shadowedText boldText flex alignCenter">
                    <a href="index.php">
                        <div id="logo"></div>
                        <p id="logoText">WheelPhoto <br><span id="versionBranch">alpha</span></p>
                    </a>
                </div>

                <div id="search">
                    <input type="search">
                    <input type="submit" value="Search">
                </div>
            </div>
        </header>
        <nav id="top">
            <div id="nav" class="flex" style="justify-content: space-between">
                <ul class="flex">
                    <li><a href="index.php">Начало</a></li>
                    <li><a class="nyi" href="javascript:void(0);">Събития</a></li>
                    <li><a href="tops.php">Класации</a></li>
                    <li class="dropdown"><a href="profiles.php">Профили</a>
                        <ul class="dropdownNav">
                            <li><a href="profiles.php?type=1">Модели</a></li>
                            <li><a href="profiles.php?type=2">Фотографи</a></li>
                            <li><a href="profiles.php?type=3">Стилисти</a></li>
                            <li><a href="profiles.php?type=4">Гримьори</a></li>
                            <li><a href="profiles.php?type=5">Дизайнери</a></li>
                            <li><a href="profiles.php?type=6">Коафьори</a></li>
                        </ul>
                    </li>
                </ul>

                <ul class="flex justifyEnd">
                    <?php if (logged_in()) {
                        if ($users = mysqli_query($GLOBALS['link'], "SELECT * FROM `mitkocom_photoproject`.`users` WHERE id='" . $GLOBALS['id'] . "'")) {
                            $row_cnt = mysqli_num_rows($users);
//                        printf("Result set has %d rows.\n", $row_cnt);
                            if ($row_cnt > 0) {
                                $usersf = mysqli_fetch_assoc($users);
//                            $username = $usersf['username'];
                            }
                            ?>
                            <li><a href="profile.php"><?= $usersf['username']; ?></a></li>
                            <li><a href="logout.php">Изход</a></li>
                            <?php
                            mysqli_free_result($users);
                        }
                    } else { ?>
                    <li><a href="login.php">Вход</a></li>
                    <li><a href="register.php">Регистрация</a></li>
                    <?php } ?>

                    <li class="loginForm">
                        <!--<input type="email" placeholder="И-мейл">-->
                        <!--<input type="password" placeholder="Парола">-->
                        <!--<input type="submit" value="Вход">-->
                    </li>
                </ul>
            </div>
        </nav>
<?php }