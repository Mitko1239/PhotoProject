<?php
require('includes/connect.php');
function output_userid()
{
    // if(isset($_SESSION['user_id'])) {
    // 	$user_id = $_SESSION['user_id'];
    // }
    // else if(isset($_COOKIE['user_id'])) {
    // 	$user_id = $_COOKIE['user_id'];
    // }
    // else {
    // 	$user_id = false;
    // }
    // return $user_id;
    //return (isset($_COOKIE['user_id'])) ? $_COOKIE['user_id'] : $_SESSION['user_id'];
//	return 1;
}

function logged_in()
{
    // if(isset($_COOKIE['username']) && isset($_COOKIE['password'])) {
    // if($_COOKIE['username'] != NULL && $_COOKIE['password'] != NULL)
    // {
    // return true;
    // }
    // else {
    // return false;
    // }
    // }

    // if(isset($_COOKIE['cookname']) && isset($_COOKIE['cookpass'])){
    // 	$_SESSION['username'] = $_COOKIE['cookname'];
    // 	$_SESSION['password'] = $_COOKIE['cookpass'];
    // }

    // $username = $_SESSION['username'];
    // $password = $_SESSION['password'];
    // $ress = mysql_query("SELECT * FROM `mitko123_blog`.`users` WHERE `username`='$username'") or die(mysql_error());
    // $rows = mysql_fetch_assoc($ress);
    //echo $username;
    //echo $password;
    //echo $rows["username"];
    //echo $rows["password"];
    // if(($rows["username"] == $username) && ($rows["password"] == $password) && ($rows["username"] != NULL) && ($rows["password"] != NULL)) {
    // 	//echo 'found matching user from cookie';
    // 	return true;
    // }
    // else {
    // 	//echo 'didn\'t find matching user from cookie';
    // 	return false;
    // }

    //return true;
//	return (isset($_COOKIE['username']) && isset($_COOKIE['password']) && $_COOKIE['username'] != NULL && $_COOKIE['password'] != NULL) ? true : false;
//	return (isset($_COOKIE['username']) && isset($_COOKIE['session']) && $_COOKIE['username'] != NULL && $_COOKIE['session'] != NULL) ? true : false;
    return (isset($_COOKIE['id']) && $_COOKIE['id'] != NULL) ? true : false;
}

function isAdmin()
{
//	$id = output_userid();
    global $link;
    $query = mysqli_query($GLOBALS['link'], "SELECT COUNT(`group`) FROM `mitkocom_photoproject`.`users` WHERE `username`='$_COOKIE[username]' AND `group`=2");
    return (mysqli_result($query, 0) == 1) ? true : false;
    //return true;
}

function isOwner()
{
    global $link;
    if (isAdmin() === true) {
        $query = mysqli_query($GLOBALS['link'], "SELECT COUNT(`group`) FROM `mitkocom_photoproject`.`users` WHERE `username`='Mitko1239' AND `group`=2");
        return (mysqli_result($query, 0) == 1) ? true : false;
    }
}

function user_exists($username)
{
    global $link;
    $username = sanitize($username);
    $query = mysqli_query($GLOBALS['link'], "SELECT COUNT(`id`) FROM `mitkocom_photoproject`.`users` WHERE `username`='$username'");
    return (mysqli_result($query, 0) == 1) ? true : false;
}

function user_active($username)
{
    global $link;
    $username = sanitize($username);
    $query = mysqli_query($GLOBALS['link'], "SELECT COUNT(`id`) FROM `mitkocom_photoproject`.`users` WHERE `username`='$username' AND `active`=1");
    return (mysqli_result($query, 0) == 1) ? true : false;
}

function user_id_from_username($username)
{
    global $link;
    $username = sanitize($username);
    $query = mysqli_query($GLOBALS['link'], "SELECT `id` FROM `mitkocom_photoproject`.`users` WHERE `username`='$username'");
    return mysqli_result($query, 0, 'id');
}

function username_from_userid($user_id)
{
    global $link;
    //$username = sanitize($username);
    $query = mysqli_query($GLOBALS['link'], "SELECT `username` FROM `mitkocom_photoproject`.`users` WHERE `id`='$user_id'");
    return mysqli_result($query, 0, 'username');
}

function login($username, $password)
{
//	login('Mitko1239', 'm1tk01239');
    global $link;
    $user_id = user_id_from_username($username);

    $username = sanitize($username);

    if ($userDB = mysqli_query($GLOBALS['link'], "SELECT password FROM `mitkocom_photoproject`.`users` WHERE `username`='$username'")) {
        $row_cnt_userdb = mysqli_num_rows($userDB);
        $userDBf = mysqli_fetch_assoc($userDB);
        mysqli_free_result($userDB);
    }
    $passwordDB = $userDBf['password'];
    $submittedPassword = $password;

    $result = password_verify($submittedPassword, $passwordDB);
    if ($result) {
        return true;
    } else {
        return false;
    }

}