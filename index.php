<?php
    include "includes/main.php";
    tplHeader("Начало", 'home'); ?>
        <div id="container1">
    			<div id="anchor-point" class="circleRegistrationComponent">
				<!-- Start Nav Structure -->
				<button class="cn-button" id="cn-button">Регистрация</button>
				<div class="cn-wrapper" id="cn-wrapper">
					<ul>
						<li><a href="register.php?type=model"><span>Модел</span></a></li>
						<li><a href="register.php?type=photographer"><span>Фотограф</span></a></li>
						<li><a href="register.php?type=stylist"><span>Стилист</span></a></li>
						<li><a href="register.php?type=makeupartist"><span>Гримьор</span></a></li>
						<li><a href="register.php?type=designer"><span>Дизайнер</span></a></li>
						<li><a href="register.php?type=coiffeur"><span>Коафьор</span></a></li>
						<li><a href="register.php?type=?"><span>?</span></a></li>
					 </ul>
				</div>
				<!-- End of Nav Structure -->
			</div>
        </div>

        <script>
            var targetOffset = $("#anchor-point").offset().top;

            var $w = $(window).scroll(function(){
                if ( $w.scrollTop() > targetOffset ) {
                    $('nav').css({"background-color":"rgba(0, 0, 0, 0.75)"});
                    $('.loginForm').css({"display":"none"});
                    $('.loginForm2').css({"display":"block"});
                } else {
                    $('nav').css({"background-color":"rgba(0, 0, 0, 0)"});
                    $('.loginForm').css({"display":"block"});
                    $('.loginForm2').css({"display":"none"});
                }
            });

            $('.loginForm2').click(function () {
                $("html, body").animate({
                    scrollTop: 0
                }, 600);
                return false;
            });
        </script>

<!--        <div id="registerChoose">-->
<!--            <div class="form">-->
<!--                <a href="register.php?profileType=photographer">-->
<!--                    <p><img class="homePageImg" src="img/camera-clipart.jpg" alt=""></p>-->
<!--                    <p>Регистрация като фотограф</p>-->
<!--                </a>-->
<!--            </div>-->
<!--            <div class="form">-->
<!--                <a href="register.php?profileType=model">-->
<!--                    <p><img class="homePageImg" src="img/model.png" alt=""></p>-->
<!--                    <p>Регистрация като модел</p>-->
<!--                </a>-->
<!--            </div>-->
            <!--TODO: страница с най-високо оценени снимки-->
<!--            <div class="form">-->
<!--                <a href="#">-->
<!--                    <p><img class="homePageImg" src="img/login.png" alt=""></p>-->
<!--                    <p>Продължи без регистрация</p>-->
<!--                </a>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
            <script src="js/demo2.js"></script>
<?php //tplFooter(); ?>