<?php

/* Questo è il template x la navbar */

?>
<div class="col-md-2 navbar-color">
    <nav class="navbar navbar-expand-lg navbar-dark navbar-color flex-column ">
        <a class="navbar-brand" href="#">
            <img alt="Punto99" src="images/punto99.png">

        </a>
        <button class="navbar-toggler d-md-none" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>


        <ul class="navbar-nav d-none d-md-block mr-auto flex-column">
            <li class="nav-item">
                <a class="nav-link icon-home" id="home" href="home.php"> Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link icon-print" href="stampa.php"> Stampa</a>
            </li>
            <li class="nav-item">
                <a class="nav-link icon-picture" href="visual.php"> Visual</a>
            </li>
            <li class="nav-item">
                <a class="nav-link icon-stickers" href="adesivi.php"> Adesivi</a>
            </li>
            <li class="nav-item">
                <a class="nav-link icon-truck" href="automezzi.php"> Automezzi</a>
            </li>
            <li class="nav-item">
                <a class="nav-link icon-banner" href="banner.php"> Banner PVC</a>
            </li>
            <li class="nav-item">
                <a class="nav-link icon-shop" href="insegne.php"> Insegne</a>
            </li>
            <li class="nav-item">
                <a class="nav-link icon-panel" href="pannelli.php"> Pannelli</a>
            </li>
            <li class="nav-item">
                <a class="nav-link icon-vcard" href="tipografia.php"> Tipografia</a>
            </li>
            <li class="nav-item">
                <a class="nav-link icon-t-shirt" href="abbigliamento.php"> Abbigliamento</a>
            </li>
            <li class="nav-item">
                <a class="nav-link icon-mail" href="contatti.php"> Contatti</a>
            </li>
            <li class="nav-item">
                <a class="nav-link icon-paper-plane" data-toggle="modal" data-target="#wt-modal" href="home.php"> Invia file</a>
            </li>
        </ul>
        <div class="collapse navbar-collapse mt-2" id="navbarSupportedContent">

            <ul class="navbar-nav d-sm-none mr-auto flex-column">
                <li class="nav-item">
                    <a class="nav-link icon-home" id="home" href="home.php"> Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link icon-print" href="stampa.php"> Stampa</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link icon-picture" href="visual.php"> Visual</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link icon-stickers" href="adesivi.php"> Adesivi</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link icon-truck" href="automezzi.php"> Automezzi</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link icon-banner" href="banner.php"> Banner PVC</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link icon-shop" href="insegne.php"> Insegne</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link icon-panel" href="pannelli.php"> Pannelli</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link icon-vcard" href="tipografia.php"> Gadget</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link icon-t-shirt" href="abbigliamento.php"> Abbigliamento</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link icon-mail" href="contatti.php"> Contatti</a>
                </li>


            </ul>


        </div>
    </nav>

    <?php include "wt_modal_form.php" ?>
</div>
