<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Browser viewport size tester</title>
    <link rel="stylesheet" href="old/css/main.css">
    <meta content="True" name="HandheldFriendly">
    <script src="js/jquery.js" type="text/javascript"></script>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300,300italic,700&subset=latin,latin-ext,cyrillic-ext,cyrillic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Product+Sans&subset=latin,cyrillic-ext,cyrillic' rel='stylesheet' type='text/css'>
    <meta name="theme-color" content="#fff">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <meta name="viewport" content="width=device-width" />
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-capable" content="yes">
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
</head>
<body>
<div id="container">

    <header>
        <div id="title">Hello world!</div>
    </header>

    <nav>
        <ul>
            <li><a href="old/index.php">index</a></li>
            <li><a href="#">2</a></li>
            <li><a href="#">3</a></li>
            <li><a href="#">4</a></li>
            <li><a href="#">5</a></li>
        </ul>
    </nav>

    <div id="containerMain">
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

        <aside>
            aside
        </aside>
    </div>

    <footer>
        &copy; <?=date("Y");?> whatever
    </footer>

</div>
</body>
</html>
