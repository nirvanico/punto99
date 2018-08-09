$(document).ready(function () {
    //inserisce home html come pagina primaria
    $('#backimg').attr('src','img/home.png');
    $('#result').load('home.html').hide().fadeIn('slow');

    //inzio del menù jquery
    $('#home').click(function(){
        $('#backimg').attr('src','img/home.png').hide().fadeIn('slow');
        $('#result').load('home.html').hide().fadeIn('slow');
    });

    $('#stampa').click(function(){
        $('#backimg').attr('src','img/stampa.png');
        $('#result').load('stampa.html').hide().fadeIn('slow');
    });
    $('#visual').click(function(){
        $('#backimg').attr('src','img/visual.png');
        $('#result').load('visual.html').hide().fadeIn('slow');
    })


});
