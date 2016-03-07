<?php
    include "includes/main.php";
    tplHeader("Профил"); ?>
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
</div>
<?php tplFooter(); ?>
