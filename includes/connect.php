<?php
/**
 * Created by PhpStorm.
 * User: dimit
 * Date: 7.3.2016 г.
 * Time: 15:49
 */

$link = mysqli_connect("localhost", "mitkocom_pp", "m1tk01239", "mitkocom_photoproject") or die("Error " . mysqli_error($link));

if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}

$utf8 = mysqli_query($link, "SET NAMES utf8");