<!doctype html>
<html>



<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Punto99 nasce per svolgere servizi grafici visivi di piccolo e grande formato su vari supporti per agevolare le aziende che cercano una qualità di stampa alta ed una garanzia sulle applicazioni sia da interno che da esterno.">

    <!-- Google Analytics -->
    <script>
        (function(i, s, o, g, r, a, m) {
            i['GoogleAnalyticsObject'] = r;
            i[r] = i[r] || function() {
                (i[r].q = i[r].q || []).push(arguments)
            }, i[r].l = 1 * new Date();
            a = s.createElement(o),
                m = s.getElementsByTagName(o)[0];
            a.async = 1;
            a.src = g;
            m.parentNode.insertBefore(a, m)
        })(window, document, 'script', 'https://www.google-analytics.com/analytics.js', 'ga');

        ga('create', 'UA-XXXXX-Y', 'auto');
        ga('send', 'pageview');

    </script>
    <!-- End Google Analytics -->

    <!-- The CSS -->
    <link rel="stylesheet" href="css/punto99.min.css">

    <title>Punto99</title>
</head>

<body>

    <div class="row no-gutters">

        <!--inzio navbar -->

        <?php include "navbar.php" ?>


        <!-- fine della navbar -->

        <div class="col mt-5 ">

            <div id=result>
                <?php /* qua lavora ajax */ ?>
            </div>

        </div>


    </div>






</body>

<?php include "footer.php" ?>


</html>
