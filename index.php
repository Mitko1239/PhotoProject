<?php
    include "includes/main.php";
    tplHeader("Начало"); ?>
        <div id="registerChoose">
            <div class="form">
                <a href="register.php?profileType=photographer">
                    <p><img class="homePageImg" src="img/camera-clipart.jpg" alt=""></p>
                    <p>Регистрация като фотограф</p>
                </a>
            </div>
            <div class="form">
                <a href="register.php?profileType=model">
                    <p><img class="homePageImg" src="img/model.png" alt=""></p>
                    <p>Регистрация като модел</p>
                </a>
            </div>
            <!--TODO: страница с най-високо оценени снимки-->
            <div class="form">
                <a href="#">
                    <p><img class="homePageImg" src="img/login.png" alt=""></p>
                    <p>Продължи без регистрация</p>
                </a>
            </div>
        </div>
    </div>
<?php tplFooter(); ?>