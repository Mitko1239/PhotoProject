<?php
include "includes/main.php";
tplHeader("Профил", 'main');
$cTab = $_GET['tab'];
$cUser = (isset($_GET['user']) && $_GET['user'] != null) ? $_GET['user'] : $GLOBALS['id'];
if (!logged_in()) {
    die(header("Location: index.php"));
}
?>

<main
    style="background: url('http://www.f-covers.com/cover/grey-floral-facebook-cover-timeline-banner-for-fb.jpg') no-repeat center;background-size:cover;">
    <?php if (logged_in()) {
        $sql =
            "SELECT u.username, firstname, lastname, email, birthdate, u.groupid,
              t.name 'type', gn.name 'gender'
              FROM users u
              JOIN types t ON u.typeid=t.typeid
              JOIN genders gn ON u.genderid=gn.genderid
              WHERE id='$cUser'";
        if ($users = mysqli_query($GLOBALS['link'], $sql)) {
            $row_cnt = mysqli_num_rows($users);
//            printf("Result set has %d rows.\n", $row_cnt);
            if ($row_cnt > 0) {
                $usersf = mysqli_fetch_assoc($users);
                $type = ($usersf['groupid'] == 2) ? "<span class=\"admin\">Администратор</span>" : $usersf['type'];
                ?>
                <div id="profileBox">
                    <div id="cover">
                        <div id="row1">
                            <div id="profilePic"><img src="https://placehold.it/100x100" alt=""></div>
                            <div id="profileName">
                                <h1><?= $usersf['firstname'] . ' ' . $usersf['lastname'] . ' (' . $usersf['username'] . ')'; ?></h1>
                                <em><?= $type; ?></em>
                            </div>
                        </div>
                    </div>
                    <!--            <div id='piemenu2' data-wheelnav-->
                    <!--                 data-wheelnav-slicepath='DonutSlice'-->
                    <!--                 data-wheelnav-rotateoff-->
                    <!--                 data-wheelnav-navangle='252'-->
                    <!--                 data-wheelnav-titleheight='36'-->
                    <!--                 data-wheelnav-cssmode-->
                    <!--                 data-wheelnav-init>-->
                    <!--                <div data-wheelnav-navitemimg='img/info.png' onmouseup='showTab(1);'></div>-->
                    <!--                <div data-wheelnav-navitemimg='img/photos.png' onmouseup='showTab(2);'></div>-->
                    <!--                <div data-wheelnav-navitemimg='img/contacts.png' onmouseup='showTab(3);'></div>-->
                    <!--                <div data-wheelnav-navitemimg='???' onmouseup='alert("Place your logic here.");'></div>-->
                    <!--                <div data-wheelnav-navitemimg='???' onmouseup='alert("Place your logic here.");'></div>-->
                    <!--            </div>-->
                    <!--            <script>-->
                    <!--                function setProfileType($value, $name) {-->
                    <!--                    $("#profileType").val($value);-->
                    <!--                    $("#profileHeader").html("като " + $name + " (ID: " + $value + ")");-->
                    <!--                    var types = ['model', 'photographer', 'stylist', 'makeupArtist', 'designer', 'coiffeur'];-->
                    <!--//                    $("#currentDesc").html(('#'+types[$value]+'Desc').val());-->
                    <!--                    $("#currentDesc").html($('#'+types[$value]+'Desc').html());-->
                    <!--                }-->
                    <!--                var piemenu = new wheelnav('piemenu2');-->
                    <!--                piemenu.clockwise = false;-->
                    <!--                piemenu.wheelRadius = piemenu.wheelRadius * 0.83;-->
                    <!--                piemenu.navItemsContinuous = true;-->
                    <!--                piemenu.sliceAngle = 36;-->
                    <!--                piemenu.createWheel();-->
                    <!--                piemenu.setTooltips(['Информация','Снимки','Контакти','3']);-->
                    <!--            </script>-->
                    <div id="tabs">
                        <ul>
                            <?php if ($cUser == $GLOBALS['id']) { ?>
                                <li>
                                    <a href="<?= ($cUser != $GLOBALS['id']) ? '?user=' . $cUser . '&' : '?'; ?>tab=edit">Редакция
                                        на профил</a>
                                </li>
                            <?php } ?>
                            <li><a href="<?= ($cUser != $GLOBALS['id']) ? '?user=' . $cUser . '&' : '?'; ?>tab=info">Информация</a>
                            </li>
                            <li><a href="<?= ($cUser != $GLOBALS['id']) ? '?user=' . $cUser . '&' : '?'; ?>tab=photos">Снимки</a>
                            </li>
                            <li>
                                <a href="<?= ($cUser != $GLOBALS['id']) ? '?user=' . $cUser . '&' : '?'; ?>tab=contacts">Контакти</a>
                            </li>
                        </ul>
                        <div>
                            <?php
                            $tz = new DateTimeZone('Europe/Sofia');
                            $age = DateTime::createFromFormat('Y-m-d', $usersf['birthdate'], $tz)
                                ->diff(new DateTime('now', $tz))
                                ->y;
                            switch ($cTab) {
                                case 'edit':
                                    ?>
                                    <h2>Редакция на профил</h2>
                                    <p>NYI</p>
                                    <?php
                                    break;

                                case 'info':
                                default:
                                    ?>
                                    <h2>Информация</h2>
                                    <table border="1">
                                        <!--                                        <thead>-->
                                        <!--                                            <th>-->
                                        <!--                                                <td></td>-->
                                        <!--                                                <td></td>-->
                                        <!--                                            </th>-->
                                        <!--                                        </thead>-->
                                        <tbody>
                                        <tr>
                                            <td>Години</td>
                                            <td><?= $age; ?></td>
                                        </tr>
                                        <tr>
                                            <td>Пол</td>
                                            <td><?= $usersf['gender']; ?></td>
                                        </tr>
                                        <tr>
                                            <td>Град</td>
                                            <td><?= $usersf['city']; ?></td>
                                        </tr>
                                        <!--                                            <tr>-->
                                        <!--                                                    <td></td>-->
                                        <!--                                                    <td></td>-->
                                        <!--                                            </tr>-->

                                        </tbody>
                                    </table>
                                    <?php
                                    break;

                                case 'photos':
                                    ?>
                                    <h2>Снимки</h2>
                                    <p>0 снимки</p>
                                    <?php
                                    break;

                                case 'contacts':
                                    ?>
                                    <h2>Контакти</h2>
                                    <p><em>Потребителят не е попълнил полетата за контакти </em></p>
                                    <?php
                                    break;
                            }
                            ?>
                        </div>
                    </div>
                </div>
                <?php
            }
            mysqli_free_result($users);
        }
    }
    ?>
</main>
<?php tplFooter(); ?>
