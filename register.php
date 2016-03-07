<?php
$type = $_GET['profileType'];
include "includes/main.php";
switch($type) {
    case 'model':
        $profileType = 'модел';
        break;
    case 'photographer':
        $profileType = 'фотограф';
        break;
    case 'coiffeur':
        $profileType = 'коафьор';
        break;
    case 'makeupartist':
        $profileType = 'гримьор';
        break;
    case 'stylist':
        $profileType = 'стилист';
        break;
    case 'designer':
        $profileType = 'дизайнер';
        break;
    default:
        header("Location: index.php");
        break;
}
tplHeader("Регистрация", 'main'); ?>
<div class="siteBox">
    <h1>Регистрация като <?=$profileType;?></h1>
</div>
<?php tplFooter(); ?>
