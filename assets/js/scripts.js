$(document).ready(function() {
    $('.enlacecontacto').click(function(event) {
        event.preventDefault();

        console.log("Me encontraste");
        $("html, body").animate({ scrollTop: $('#contacto').offset().top }, 1000);
    });


    var cargarDatos = function(titulo, foto) {
        var tituloDom = document.getElementById('exampleModalLongTitle');
        var imagenDom = document.getElementById('imagenModal');
        tituloDom.innerHTML = titulo;
        imagenDom.src = "subidas/" + foto;
    }
});

$('.carousel').carousel({
    interval: 2000
});

$('.carousel-control-prev').click(function() {
    console.log("PREV");
    $('#carouselExampleSlidesOnly').carousel('prev');
});

$('.carousel-control-next').click(function() {
    console.log("NEXT");
    $('#carouselExampleSlidesOnly').carousel('next');
});