$(document).ready(function() {
    $('.enlacecontacto').click(function(event) {
        event.preventDefault();

        console.log("Me encontraste");
        $("html, body").animate({ scrollTop: $('#contacto').offset().top }, 1000);
    });
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