<?php
    include "includes/main.php";
    tplHeader("Профил", 'main'); ?>
    <script>
        $(function() {
            $("#tabs").tabs();
        });
    </script>
    <main>
        <div id="profileBox">
            <div id="cover">
                <div id="row1">
                    <div id="profilePic"><img src="https://placehold.it/150x150" alt=""></div>
                    <div id="profileName">
                        <h1>Димитър Димитров (undefined)</h1>
                        <em>Фотограф</em>
                    </div>
                </div>
            </div>
            <div id='piemenu2' data-wheelnav
                 data-wheelnav-slicepath='DonutSlice'
                 data-wheelnav-rotateoff
                 data-wheelnav-navangle='252'
                 data-wheelnav-titleheight='36'
                 data-wheelnav-cssmode
                 data-wheelnav-init>
                <div data-wheelnav-navitemimg='img/info.png' onmouseup='showTab(1);'></div>
                <div data-wheelnav-navitemimg='img/photos.png' onmouseup='showTab(2);'></div>
                <div data-wheelnav-navitemimg='img/contacts.png' onmouseup='showTab(3);'></div>
                <div data-wheelnav-navitemimg='???' onmouseup='alert("Place your logic here.");'></div>
                <div data-wheelnav-navitemimg='???' onmouseup='alert("Place your logic here.");'></div>
            </div>
            <script>
                function setProfileType($value, $name) {
                    $("#profileType").val($value);
                    $("#profileHeader").html("като " + $name + " (ID: " + $value + ")");
                    var types = ['model', 'photographer', 'stylist', 'makeupArtist', 'designer', 'coiffeur'];
//                    $("#currentDesc").html(('#'+types[$value]+'Desc').val());
                    $("#currentDesc").html($('#'+types[$value]+'Desc').html());
                }
                var piemenu = new wheelnav('piemenu2');
                piemenu.clockwise = false;
                piemenu.wheelRadius = piemenu.wheelRadius * 0.83;
                piemenu.navItemsContinuous = true;
                piemenu.sliceAngle = 36;
                piemenu.createWheel();
                piemenu.setTooltips(['Информация','Снимки','Контакти','3']);
            </script>
            <div id="tabs">
                <ul class="hidden">
                    <li><a href="#tabs-1">Nunc tincidunt</a></li>
                    <li><a href="#tabs-2">Proin dolor</a></li>
                    <li><a href="#tabs-3">Aenean lacinia</a></li>
                </ul>
                <div id="tabs-1">
                    <h2>Информация</h2>
                </div>
                <div id="tabs-2">
                    <h2>Снимки</h2>
                </div>
                <div id="tabs-3">
                    <h2>Контакти</h2>
                </div>
            </div>
    </div>
    </main>
<?php tplFooter(); ?>
