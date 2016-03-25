<meta http-equiv="refresh" content="0;URL=index.php">
<?php
if (isset($_COOKIE['id'])) {
    unset($_COOKIE['id']);
    setcookie('id', null, -1, '/');
    return true;
    header("Location: index.php");
} else {
    return false;
}
?>