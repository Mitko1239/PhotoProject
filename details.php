<?php
include "includes/main.php";
tplHeader("Детайли за снимка"); ?>
    <style>
        main {
            /*background: red;*/
        }
    </style>
    <main>
        <div id="detailsPage">
            <section id="info">
                <h3>Информация за снимка</h3>
                <h4>качена от <a href="#">Потребител</a>&nbsp; <span class="views"></span><span
                        id="viewsLabel">No views</span></h4>
            </section>
            <section id="main">
                <img
                    src="https://rwkzua-dm2306.files.1drv.com/y3pZ5PV6Meppij0AvwkqdrAhsEKE9M-e0suen-Eb_09cZVjyU-Pt52VcInl1_0nhFzgrBYpG8qwjuE-5-ijytlXGeiGnk7X1WqtqvEJvhdFNZXGPj5n4IQ1g5JLw2RaATWPtna2LFOq5X6ELueLY3f9oa3gsWveOhZbA4xfaIAALlk/62303655d2b73c6ca718c3b8e9f716f4.png?psid=1"
                    alt="">
            </section>
            <section id="comments">
                0 коментара
            </section>
        </div>
    </main>
<?php tplFooter(); ?>