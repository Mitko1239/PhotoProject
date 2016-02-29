<?php
/**
 * Created by PhpStorm.
 * User: dimit
 * Date: 29.2.2016 г.
 * Time: 17:44
 */
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Профил</title>
    <link rel="stylesheet" href="css/style.css">
    <script src="js/jquery.js"></script>
    <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
    <script>
        $(function() {
            $( "#tabs" ).tabs();
        });
    </script>
    <meta charset="utf-8">
</head>
<body>
<div id="container">
    <nav id="top">
        <ul>
            <li><h3>Site Name</h3></li>
            <li><input type="email" placeholder="И-мейл"></li>
            <li><input type="password" placeholder="Парола"></li>
            <li><input type="submit" value="Вход"></li>
        </ul>
    </nav>

    <div class="siteBox">
        <div id="profileBox">
            <div id="cover">
                <div id="row1">
                    <div id="profilePic"><img src="https://placehold.it/150x150" alt=""></div>
                    <div id="profileName">
                        <h1>Username</h1>
                        <em>Фотограф</em>
                    </div>
                </div>
            </div>

            <div id="tabs">
                <nav id="profileMenu">
                    <ul>
                        <li><a href="#tabs-1">Информация</a></li>
                        <li><a href="#tabs-2">Снимки</a></li>
                        <li><a href="#tabs-3">Контакти</a></li>
                    </ul>
                </nav>
                <div id="tabs-1">
                    <h2>Информация</h2>
                </div>
                <div id="tabs-2">
                    <h2>Снимки</h2>
                </div>
                <div id="tabs-3">
                    <h2>Контакти</h2>
                </div>
            </div>
    </div>


    <footer>
        &copy; 2016 Whatever Corp.
    </footer>

</div>
</body>
</html>
