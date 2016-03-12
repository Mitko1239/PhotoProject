<?php
include "includes/main.php";
tplHeader("Browser viewport size tester"); ?>
    <style>
        * {

            -webkit-transition: none !important;
            -moz-transition: none !important;
            -o-transition: none !important;
            transition: none !important;
            margin: 0;
            padding: 0;
            -webkit-text-size-adjust: none;
        }
    </style>
    <script>
        $(document).ready(function(e) {
            showViewportSize();
            pageSize();
        });
        setTimeout(showViewportSize, 1);
        setTimeout(pageSize, 1);
        $(window).resize(function(e) {
            showViewportSize();
            pageSize();
        });
        function showViewportSize() {
            var the_width = $(window).width();
            var the_height = $(window).height();
            $('#width').text(the_width);
            $('#height').text(the_height);
        }

        function pageSize() {
            var html_width = $('html').width();
            var html_height = $('html').height();
            $('#widthHTML').text(html_width);
            $('#heightHTML').text(html_height);
        }
    </script>
        <main>
            <div id="pageBox" class="textC" style="text-align:center;flex-direction:column;display: flex;justify-content: center;align-content: center;">
                <h2>Animations are disabled on this page to ensure the script outputs the correct values!</h2>

                <h2>Viewport size:</h2>
                <div style="font-size: 2em;margin-top:5px;">
                    <span id="width">N/A</span> x <span id="height">N/A</span>
                </div>

                <h2 style="margin-top:10px;">Page size</h2>
                <div style="font-size: 2em;margin-top:5px;">
                    <span id="widthHTML">N/A</span> x <span id="heightHTML">N/A</span>
                </div>
            </div>
        </main>
<?php tplFooter(); ?>