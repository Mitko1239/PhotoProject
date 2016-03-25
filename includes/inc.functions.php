<?php
function truncate($text, $chars, $dots)
{
    $text = $text . " ";
    $text = substr($text, 0, $chars);
    $text = substr($text, 0, strrpos($text, ' '));
    #$text = (strlen($text) > $chars) ? $text." [..]" : $text;
    switch ($dots) {
        case 1:
            $text = $text . " [..]";
            break;
        case 2:
            $text = $text . "..";
            break;
    }
    return $text;
}

function time_stamp($session_time)
{
    $session_time = strtotime($session_time . ' GMT+3');
    $time_difference = time() - $session_time;


    $seconds = $time_difference;
    $minutes = round($time_difference / 60);
    $hours = round($time_difference / 3600);
    $days = round($time_difference / 86400);
    $weeks = round($time_difference / 604800);
    $months = round($time_difference / 2419200);
    $years = round($time_difference / 29030400);
// Seconds
    if ($seconds <= 60) {
        if ($seconds < 5) {
            echo "току-що";
        } else {
            echo "преди <a>$seconds</a> секунди";
        }
    } //Minutes
    else if ($minutes <= 60) {

        if ($minutes == 1) {
            echo "преди <a>1</a> минута";
        } else {
            echo "преди <a>$minutes</a> минути";
        }

    } //Hours
    else if ($hours <= 24) {

        if ($hours == 1) {
            echo "преди <a>1</a> час";
        } else {
            echo "преди <a>$hours</a> часа";
        }

    } //Days
    else if ($days <= 7) {

        if ($days == 1) {
            echo "преди <a>1</a> ден";
        } else {
            echo "преди <a>$days</a> дни";
        }

    } //Weeks
    else if ($weeks <= 4) {

        if ($weeks == 1) {
            echo "преди <a>1</a> седмица";
        } else {
            echo "преди <a>$weeks</a> седмици";
        }

    } //Months
    else if ($months <= 12) {

        if ($months == 1) {
            echo "преди <a>1</a> месец";
        } else {
            echo "преди <a>$months</a> месеца";
        }

    } //Years
    else {

        if ($years == 1) {
            echo "преди <a>1</a> година";
        } else {
            echo "преди <a>$years</a> години";
        }

    }
}

function matchRow($time, $team1, $team2, $stream, $ifShow, $title)
{
    ?>
    <tr>
        <td><?= $time; ?></td>
        <td <?= ($ifShow == 1) ? 'colspan="2"' : ''; ?>><?= ($ifShow == 1) ? $title : $team1; ?></td>
        <td><?= $team2; ?></td>
        <td><a href="/international/stream/<?= $stream; ?>">гледай</a></td>
    </tr>
    <?php
}

function truncate_utf8($string, $len, $wordsafe = FALSE, $dots = FALSE)
{

    if (strlen($string) <= $len) {
        return $string;
    }

    if ($dots) {
        $len -= 4;
    }

    if ($wordsafe) {
        $string = substr($string, 0, $len + 1); // leave one more character
        if ($last_space = strrpos($string, ' ')) { // space exists AND is not on position 0
            $string = substr($string, 0, $last_space);
        } else {
            $string = substr($string, 0, $len);
        }
    } else {
        $string = substr($string, 0, $len);
    }

    if ($dots) {
        $string .= ' ...';
    }

    return $string;
}


function time_stamp_reverse($session_time)
{
    $session_time = strtotime($session_time . ' GMT+3');
    $time_difference = $session_time - time();


    $seconds = $time_difference;
    $minutes = round($time_difference / 60);
    $hours = round($time_difference / 3600);
    $days = round($time_difference / 86400);
    $weeks = round($time_difference / 604800);
    $months = round($time_difference / 2419200);
    $years = round($time_difference / 29030400);
// Seconds
    if ($seconds <= 60) {
        if ($seconds < 5) {
            echo "скоро";
        } else {
            echo "след <a>$seconds</a> секунди";
        }
    } //Minutes
    else if ($minutes <= 60) {

        if ($minutes == 1) {
            echo "след <a>1</a> минута";
        } else {
            echo "след <a>$minutes</a> минути";
        }

    } //Hours
    else if ($hours <= 24) {

        if ($hours == 1) {
            echo "след <a>1</a> час";
        } else {
            echo "след <a>$hours</a> часа";
        }

    } //Days
    else if ($days <= 7) {

        if ($days == 1) {
            echo "след <a>1</a> ден";
        } else {
            echo "след <a>$days</a> дни";
        }

    } //Weeks
    else if ($weeks <= 4) {

        if ($weeks == 1) {
            echo "след <a>1</a> седмица";
        } else {
            echo "след <a>$weeks</a> седмици";
        }

    } //Months
    else if ($months <= 12) {

        if ($months == 1) {
            echo "след <a>1</a> месец";
        } else {
            echo "след <a>$months</a> месеца";
        }

    } //Years
    else {

        if ($years == 1) {
            echo "след <a>1</a> година";
        } else {
            echo "след <a>$years</a> години";
        }

    }
}

?>