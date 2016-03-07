<?php
    include "includes/main.php";
    tplHeader("Начало", 'home'); ?>


    			<div class="circleRegistrationComponent">
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