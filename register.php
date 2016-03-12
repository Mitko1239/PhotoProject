<?php
include "includes/main.php";
tplHeader("Начало"); ?>
    <main>
        <!-- data-wheelnav-spreader data-wheelnav-spreaderpath='PieSpreader'-->
        <div class="flex">
            <div id='piemenu' data-wheelnav
                 data-wheelnav-slicepath='DonutSlice'

                 data-wheelnav-navangle='270'
                 data-wheelnav-titleheight='40'
                 data-wheelnav-cssmode
                 data-wheelnav-init>
                <div data-wheelnav-navitemimg='img/model.png' onmouseup='setProfileType(0,"модел");'></div>
                <div data-wheelnav-navitemimg='img/photographer.png' onmouseup='setProfileType(1,"фотограф");'></div>
                <div data-wheelnav-navitemimg='img/stylist.png' onmouseup='setProfileType(2,"стилист");'></div>
                <div data-wheelnav-navitemimg='img/makeupartist.png' onmouseup='setProfileType(3,"гримьор");'></div>
                <div data-wheelnav-navitemimg='img/designer.png' onmouseup='setProfileType(4,"дизайнер");'></div>
                <div data-wheelnav-navitemimg='img/coiffeur.png' onmouseup='setProfileType(5,"коафьор");'></div>
            </div>
            <script>
                function setProfileType($value, $name) {
                    $("#profileType").val($value);
                    $("#profileHeader").html("като " + $name + " (ID: " + $value + ")");
                    var types = ['model', 'photographer', 'stylist', 'makeupArtist', 'designer', 'coiffeur'];
//                    $("#currentDesc").html(('#'+types[$value]+'Desc').val());
                    $("#currentDesc").html($('#'+types[$value]+'Desc').html());
                }
                var piemenu = new wheelnav('piemenu');
                piemenu.spreaderInTitle = icon.plus;
                piemenu.spreaderOutTitle = icon.cross;
                piemenu.spreaderRadius = piemenu.wheelRadius * 0.34;
                piemenu.clockwise = false;
                piemenu.wheelRadius = piemenu.wheelRadius * 0.83;
                piemenu.createWheel();
                piemenu.setTooltips(['Модел','Фотограф','Стилист','Гримьор','Дизайнер','Коафьор']);
            </script>

            <div id="registrationForm">
                <form action="">
                    <fieldset>
                        <legend><h2>Регистрация <span id="profileHeader"></span></h2></legend>
                        <fieldset>
                            <legend>Данни за профила:</legend>
                            <table>
                                <tr style="display: none;">
                                    <td>Тип на профила: </td>
                                    <td><input type="hidden" id="profileType" name="regProfileType" value="" readonly /> (няма да е публично поле)</td>
                                </tr>
                                <tr>
                                    <td>И-мейл:</td>
                                    <td><input type="email" name="regEmail" id="regEmail" placeholder="ivanivanov@abv.bg" /></td>
                                </tr>
                                <tr>
                                    <td>Потребителско име: </td>
                                    <td><input type="text" placeholder="IvanIvanov123" id="regUsername" name="regUsername" /></td>
                                </tr>
                                <tr>
                                    <td>Парола: </td>
                                    <td><input type="password" placeholder="*********" id="regPass" name="regPass" /></td>
                                </tr>
                                <tr>
                                    <td>Повтори паролата: </td>
                                    <td><input type="password" placeholder="*********" id="regPass2" name="regPass2" /></td>
                                </tr>
                            </table>
                        </fieldset>
                        <fieldset>
                            <legend>Лични данни:</legend>
                            <table>
                                <tr>
                                    <td>Име: </td>
                                    <td><input type="text" placeholder="Ivan" id="regFirstname" name="regFirstname" value="" /></td>
                                </tr>
                                <tr>
                                    <td>Фамилия: </td>
                                    <td><input type="text" placeholder="Ivanov" id="regLastname" name="regLastname" /></td>
                                </tr>
                                <tr>
                                    <td>Дата на раждане: </td>
                                    <td><input type="date" placeholder="" id="regBirthdate" name="regBirthdate" /></td>
                                </tr>
                                <tr>
                                    <td>Пол: </td>
                                    <td>
                                        <select name="regGender" id="regGender">
                                            <option value="0" default>Предпочитам да не споделям</option>
                                            <option value="1">Мъж</option>
                                            <option value="2">Жена</option>
                                        </select>
                                    </td>
                                </tr>
                            </table>
                        </fieldset>
                        <fieldset>
                            <legend>Местожителство:</legend>
                            <table>
                                <tr>
                                    <td>Държава: </td>
                                    <td>
                                        <select name="regCountry" id="regCountry">
                                            <option value="0" default>**NOT YET IMPLEMENTED**</option>
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Област: </td>
                                    <td>
                                        <select name="regState" id="regState">
                                            <option value="0" default>**NOT YET IMPLEMENTED**</option>
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Град: </td>
                                    <td>
                                        <select name="regCity" id="regCity">
                                            <option value="0" default>**NOT YET IMPLEMENTED**</option>
                                        </select>
                                    </td>
                                </tr>
                            </table>
                        </fieldset>
                        <table>
                            <tr>
                                <td><input type="submit" value="Регистрация"></td>
                            </tr>
                        </table>
                    </fieldset>
                </form>
            </div>

            <div id="profileTypeDesc">
                <div id="currentDesc"></div>
                <div id="descriptions" style="display: none;">
                    <div id="modelDesc">
                        <h2>Модел</h2>
                        <p>описание за модел</p>
                    </div>
                    <div id="photographerDesc">
                        <h2>Фотограф</h2>
                        <p>описание за фотограф</p>
                    </div>
                    <div id="stylistDesc">
                        <h2>Стилист</h2>
                        <p>описание за стилист</p>
                    </div>
                    <div id="makeupArtistDesc">
                        <h2>Гримьор</h2>
                        <p>описание за гримьор</p>
                    </div>
                    <div id="designerDesc">
                        <h2>Дизайнер</h2>
                        <p>описание за дизайнер</p>
                    </div>
                    <div id="coiffeurDesc">
                        <h2>Коафьор</h2>
                        <p>описание за коафьор</p>
                    </div>
                </div>
            </div>
        </div>
    </main>
<?php tplFooter(); ?>