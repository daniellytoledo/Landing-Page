$(document).ready(function() {
    $('#mobile_btn').on('click', function () {
        console.log('Botão móvel clicado!'); // Verifique no console do navegador
        $('#mobile_menu').toggleClass('active');
        $('#mobile_btn').find('i').toggleClass('fa-x'); 
    });
});
