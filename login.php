<?php
include "includes/main.php";
tplHeader("Вход"); ?>
    <main>

            <div id="loginForm">
                <form action="">
                    <fieldset>
                        <legend><h2>Вход</h2></legend>
                            <table>
                                <tr>
                                    <td>И-мейл: </td>
                                    <td><input type="email" name="regEmail" id="regEmail" placeholder="ivanivanov@abv.bg" /></td>
                                </tr>
                                <tr>
                                    <td>Парола: </td>
                                    <td><input type="password" placeholder="*********" id="regPass" name="regPass" /></td>
                                </tr>
                                <tr>
                                    <td><input type="submit" value="Вход" name="doLogin" id="doLogin" /></td>
                                </tr>
                            </table>
                    </fieldset>
                </form>
            </div>
    </main>
<?php tplFooter(); ?>
