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

    // un semplice form validator che lavora tramite bs4 e jquery

    $("#sendbtn").click(function () {

        //Fetch form to apply custom Bootstrap validation
        var form = $("#target")
        //alert(form.prop('id')) //test to ensure calling form correctly

        if (form[0].checkValidity() === false) {
            event.preventDefault()
            event.stopPropagation()
        }
        form.addClass('was-validated')
        // evento submit
        $("#target").submit(function (event) {
            var nome = $('#nome').val();
            var cognome = $('#cognome').val();
            var email = $('#email').val();
            var fileuploaded = $("#customFile").val();
            alert("Handler for .submit() called." + nome + cognome + email + fileuploaded);
            event.preventDefault();

        });
    });

    $('.nav-link').click(function (e) {

        e.preventDefault(); // evito l'azione predefinita del link <a>
        $('.nav.link').removeClass('active');

        var route = $(this).attr('data-page'); //prendo l'attributo data page;
        alert(route); // controllo se lo ha selezionato
        $(this).addClass('active').hide().fadeIn('slow');

        $.ajax({
            method: 'POST',
            url: 'routing.php',
            data: {page: route},
            complete: function (response) {
                if (response.message == 'OK') {
                    $('#result').html(response.result).hide().fadeIn('slow'); //mostro il risultato nel div #result
                } else {
                    alert('Errore!');
                }
            }

        });

    });


});


/*
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
*/


$(document).ajaxSuccess(function () {

    $('#customFile').change(function () {


        var FileName = this.files[0].name;
        $('.custom-file-label').html(FileName);
    });

});
