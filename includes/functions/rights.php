<?php
function customMsg($customMsg)
{
    ?>
    <style type="text/css">
        .infoBox {
            margin: 5px 0;
        }
    </style>
    <div class="infoBox">
        <table border="0">
            <tbody>
            <tr>
                <td>
                    <img src="../img/warning.png" style="width: 31px; height: 31px;"/>
                </td>
                <td width="100%">
                    <?= $customMsg; ?>
                </td>
            </tr>
            </tbody>
        </table>
    </div>
    <div class="clear"></div>
<?php }

function intlNotEnoughRights()
{
    ?>
    <style>
        aside {
            display: none;
            width: 0%;
        }

        main {
            width: 100%;
            border-right: 0;
        }

        #blogPostContainer {
            background-image: none;
            height: 50px;
        }
    </style>
    <div class="infoBox">
        <table border="0">
            <tbody>
            <tr>
                <td>
                    <img src="../img/warning.png" style="width: 31px; height: 31px;"/>
                </td>
                <td width="100%">
                    Потребители без администраторски права не могат да достъпват тази страница.
                </td>
            </tr>
            </tbody>
        </table>
    </div>
    <!--<div class="clear"></div>-->
<?php }

function legacyMsg()
{
    ?>
    <style>
        /*aside {display: none; width: 0%;}
        main {width: 100%; border-right: 0;}
        #blogPostContainer { background-image: none; height: 50px;}*/
    </style>
    <div class="infoBox">
        <table border="0">
            <tbody>
            <tr>
                <td>
                    <img src="../img/warning.png" style="width: 31px; height: 31px;"/>
                </td>
                <td width="100%">
                    Тази страница вече е неподдържана. Моля, допитайте се до администратора за адреса на новата
                    страница, ако има такава.
                </td>
            </tr>
            </tbody>
        </table>
    </div>
    <!--<div class="clear"></div>-->
<?php }