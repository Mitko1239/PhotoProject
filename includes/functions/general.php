<?php

//VERY TEMPORARY SOLUTION
function mysqli_result($res, $row = 0, $col = 0)
{
    $numrows = mysqli_num_rows($res);
    if ($numrows && $row <= ($numrows - 1) && $row >= 0) {
        mysqli_data_seek($res, $row);
        $resrow = (is_numeric($col)) ? mysqli_fetch_row($res) : mysqli_fetch_assoc($res);
        if (isset($resrow[$col])) {
            return $resrow[$col];
        }
    }
    return false;
}

//VERY TEMPORARY SOLUTION

function sanitize($data)
{
    global $link;
    return mysqli_real_escape_string($link, $data);
}

function output_errors($errors)
{
    echo '<ul>';
    if (is_array($errors) && count($errors) > 0) {
        foreach ($errors as $error) {
            echo '<li>', $error, '</li>';
        }
    }
    echo '</ul>';
}

function trimURL()
{
//	print_r($_SERVER);
    return explode('.', explode('/', explode('?', $_SERVER['REQUEST_URI'])[0])[1])[0];
}