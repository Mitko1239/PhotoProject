<?php
include('main.php');

if (isset($_REQUEST['actionfunction']) && $_REQUEST['actionfunction'] != '') {
    $actionfunction = $_REQUEST['actionfunction'];

    call_user_func($actionfunction, $_REQUEST, $GLOBALS['link'], $limit);
}
function showData($data, $con, $limit)
{
    $page = $data['page'];
    if ($page == 1) {
        $start = 0;
    } else {
        $start = ($page - 1) * $limit;
    }

    $sql = "SELECT * FROM actor_info ORDER BY id DESC limit $start,$limit";
    $str = '';
    $data = $con->query($sql);
    if ($data != null && $data->num_rows > 0) {
        while ($row = $data->fetch_array(MYSQLI_ASSOC)) {
            $str .= "<div class='data-container'><p>" . $row['id'] . "</p><p>" . $row['first_name'] . "</p><p>" . $row['last_name'] . "</p></div>";
        }
        $str .= "<input type='hidden' class='nextpage' value='" . ($page + 1) . "'><input type='hidden' class='isload' value='true'>";
    } else {
        $str .= "<input type='hidden' class='isload' value='false'><p>Finished</p>";
    }


    echo $str;

}
