<?php
include "includes/main.php";
tplHeader("Профили");
$type = $_GET['type'];
?>
    <style>
        main {
            /*background: red;*/
        }
    </style>
    <main>
        <!--            <h1>Профили</h1>-->
        <?php
        $sql =
            "SELECT u.*, t.name 'typename' FROM users u
                        JOIN types t ON t.typeid=u.typeid";
        if (isset($type) && $type != null && is_numeric($type)) {
            $sql .= " WHERE u.typeid='$type'";
        }
        if ($users = mysqli_query($GLOBALS['link'], $sql)) {
            $row_cnt = mysqli_num_rows($users);
        //            printf("Result set has %d rows.\n", $row_cnt);
            if ($row_cnt > 0) {
                if (isset($type) && $type != null && is_numeric($type)) {
                    $types = mysqli_query($GLOBALS['link'], $sql);
                    $typesf = mysqli_fetch_assoc($types);

                    echo '<h2>Профили на ' . mb_strtolower($typesf['typename']) . 'и</h2>';
                    ?>
                    <select name="" id="">
                        <option value="">---Избор на град---</option>
                        <option value="">невъведен</option>
                        <option value="">Бургас</option>
                        <option value="">Варна</option>
                        <option value="">София</option>
                    </select>
                    <?php
                }
//                } else {
//                    echo '<h2>Профили</h2>';
//                }
        //                echo '<table id="profiles">';
                ?>
        <!--                <thead>-->
        <!--                <tr>-->
        <!--                    <th>Име</th>-->
        <!--                    <th>Фамилия</th>-->
        <!--                    <th>Потребителско име</th>-->
        <!--                    <th>Град</th>-->
        <!--                </tr>-->
        <!--                </thead>-->
                <?php
                while ($usersf = mysqli_fetch_assoc($users)) {
                    ?>

        <div>
            <h2><?= $usersf['firstname']; ?> <?= $usersf['lastname']; ?></h2>
            <!--                        <td width="31%">--><?//= $usersf['username']; ?><!--</td>-->
                        <!--                                        <td width="10%">-->
                        <?//=$usersf['typename'];?><!--</td>-->
            Град: <?= $usersf['city']; ?>
                    <?php
                }
                    //                echo '</table>';
            }
        }
        ?>

    </main>
<?php tplFooter(); ?>