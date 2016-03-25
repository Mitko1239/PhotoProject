<?php
include "includes/main.php";
tplHeader("Вход");
?>
    <main>

            <div id="loginForm">
                <?php
                if ($_POST['doLogin']) {
                    $postEmail = $_POST['logEmail'];
                    $postPass = sha1($_POST['logPass']);
                    if ($users = mysqli_query($link, "SELECT * FROM `mitkocom_photoproject`.`users` WHERE email='$postEmail' AND password='$postPass'")) {
                        $row_cnt = mysqli_num_rows($users);
                        //printf("Result set has %d rows.\n", $row_cnt_00);
                        if ($row_cnt > 0) {
                            $usersf = mysqli_fetch_assoc($users);
                            if ($usersf['email'] === $postEmail && $usersf['password'] === $postPass) {
                                setcookie('id', $usersf['id'], time() + 36000, '/');
                                header("Location: profile.php");
                                echo '<meta http-equiv="refresh" content="0;URL=profile.php">';
                            }
                        } else {
                            echo '<h3>Грешен и-мейл или парола</h3>';
                        }
                        mysqli_free_result($users);
                    }

                }
                if (!logged_in()) {
                ?>

                <form action="" method="post">
                    <fieldset>
                        <legend><h2>Вход</h2></legend>
                            <table>
                                <tr>
                                    <td>И-мейл: </td>
                                    <td><input type="email" name="logEmail" id="logEmail"
                                               placeholder="ivanivanov@abv.bg"/></td>
                                </tr>
                                <tr>
                                    <td>Парола: </td>
                                    <td><input type="password" placeholder="*********" id="logPass" name="logPass"/>
                                    </td>
                                </tr>
                                <tr>
                                    <td><input type="submit" value="Вход" name="doLogin" id="doLogin" /></td>
                                </tr>
                            </table>
                    </fieldset>
                </form>
            </div>
        <?php } else {

            header("Location: profile.php");
            ob_end_flush();
        } ?>
    </main>
<?php tplFooter(); ?>
