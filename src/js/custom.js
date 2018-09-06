//inserisce home html come pagina primaria
$('#result').load('front_page.html').hide().fadeIn('slow');

$('#home').addClass('active');


//funzioni pagina caricata
$(document).ready(function () {


    // aggiunge una linea verde accanto a nav-link
    $('.nav-link').hover(function () {
            $(this).css("border-left", "4px solid #046900");
        },
        function () {
            $(this).css("border-left", 'none');
        });


});

// menù ajax con effetti
$('.nav-link').click(function (e) {

    e.preventDefault(); //disabilita la funziolità href dei link perchè sostituta da ajax
    $('.nav-link').removeClass('active');
    var value = $(this).attr('href');
    var control = {
        'is_post': true
    };
    $(this).addClass('active').hide().fadeIn('slow');

    $.post(value, control, function (data) {
        $('#result').html(data);
    }).hide().fadeIn('slow');

});


// funzioni caricate dopo l'esecuzione del ajax
/*
$(document).ajaxSuccess(function () {




    $('input[type="file"]').change(function () {

        var fileName = e.target.files[0].name;
        //inserisco il nome del file dentro il div con classe "custom-file-label"
        $('.custom-file-label').html(fileName);

    });

    $('#sendbtn').click(function () {


        var nome = $('#nome').val();
        var email = $('#email').val();
        var comments = $('#comments').val();

        alert(nome);


    });


});
*/
