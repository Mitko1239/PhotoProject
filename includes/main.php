<?php
/**
 * Created by PhpStorm.
 * User: dimit
 * Date: 7.3.2016 �.
 * Time: 15:49
 */
session_start();
error_reporting(E_ALL ^ E_NOTICE);
include "connect.php";

require "inc.functions.php";
require "functions/general.php";
require "functions/users.php";
require "functions/rights.php";

include "./templates/index.php";

//$global_user_id = output_userid();
$global_user_id = user_id_from_username($_SESSION['username']);
$global_id = $_COOKIE['id'];
$errors = array();

$loggedIn = $_SESSION['username'];