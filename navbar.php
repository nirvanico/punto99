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
                <a class="nav-link icon-home" id="home" data-page="home"> Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link icon-print" data-page="stampa"> Stampa</a>
            </li>
            <li class="nav-item">
                <a class="nav-link icon-picture" data-page="visual"> Visual</a>
            </li>
            <li class="nav-item">
                <a class="nav-link icon-stickers" data-page="adesivi"> Adesivi</a>
            </li>
            <li class="nav-item">
                <a class="nav-link icon-truck" data-page="automezzi"> Automezzi</a>
            </li>
            <li class="nav-item">
                <a class="nav-link icon-banner" data-page="banner"> Banner PVC</a>
            </li>
            <li class="nav-item">
                <a class="nav-link icon-shop" data-page="insegne"> Insegne</a>
            </li>
            <li class="nav-item">
                <a class="nav-link icon-panel" data-page="pannelli"> Pannelli</a>
            </li>
            <li class="nav-item">
                <a class="nav-link icon-vcard" data-page="tipografia"> Tipografia</a>
            </li>
            <li class="nav-item">
                <a class="nav-link icon-t-shirt" data-page="abbigliamento"> Abbigliamento</a>
            </li>
            <li class="nav-item">
                <a class="nav-link icon-mail" data-page="contatti"> Contatti</a>
            </li>
            <li class="nav-item">
                <a class="nav-link icon-paper-plane" data-toggle="modal" data-target="#wt-modal"> Invia file</a>
            </li>
        </ul>
        <div class="collapse navbar-collapse mt-2" id="navbarSupportedContent">

            <ul class="navbar-nav d-sm-none mr-auto flex-column">
                <li class="nav-item">
                    <a class="nav-link icon-home" id="home" data-page="home"> Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link icon-print" data-page="stampa"> Stampa</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link icon-picture" data-page="visual"> Visual</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link icon-stickers" data-page="adesivi"> Adesivi</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link icon-truck" data-page="automezzi"> Automezzi</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link icon-banner" data-page="banner"> Banner PVC</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link icon-shop" data-page="insegne"> Insegne</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link icon-panel" data-page="pannelli"> Pannelli</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link icon-vcard" data-page="tipografia"> Gadget</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link icon-t-shirt" data-page="abbigliamento"> Abbigliamento</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link icon-mail" data-page="contatti"> Contatti</a>
                </li>


            </ul>


        </div>
    </nav>

    <?php include "wt_modal_form.php" ?>
</div>
