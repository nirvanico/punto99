$(document).ready(function () {

    //funzioni pagina caricata
    //inserisce home html come pagina primaria
    $('#result').load('home.html').hide().fadeIn('slow');
    $('#home').addClass('active');

    // aggiunge una linea rossa accanto a nav-link
    $('.nav-link').hover(function () {
            $(this).css("border-left", "4px solid #046900");
        },
        function () {
            $(this).css("border-left", 'none');
        });

    // menù ajax con effetti
    $('.nav-link').click(function (e) {

        e.preventDefault(); //disabilita la funziolità href dei link perchè sostituta da ajax
        $('.nav-link').removeClass('active');
        var value = $(this).attr('href');
        $(this).addClass('active').hide().fadeIn('slow');

        $('#result').load(value).hide().fadeIn('slow'); // carico le pagine al interno del div #result



    });



});

$(document).ajaxSuccess(function () {

    $('input[type="file"]').change(function (e) {

        var fileName = e.target.files[0].name;

        $('.custom-file-label').html(fileName);

    });

    $('#wt-form').submit(function () {

        var nome = $('#nome').val();
        var email = $('#email').val();
        var comment = $('#comment').val();

        alert(nome);

    });

});
