$(document).ready(function () {
    //funzioni pagina caricata
    //inserisce home html come pagina primaria

    $('#result').load('home.html').hide().fadeIn('slow');


    $('#home').click(function () {

        $('#result').load('home.html').hide().fadeIn('slow');
    });

    $('#stampa').click(function () {

        $('#result').load('stampa.html').hide().fadeIn('slow');
    });
    $('#visual').click(function () {

        $('#result').load('visual.html').hide().fadeIn('slow');
    })

    $(function () {
        $('[data-toggle="tooltip"]').tooltip()
    })
});
