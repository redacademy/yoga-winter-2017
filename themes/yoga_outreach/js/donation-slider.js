(function($){
    $('.main-carousel').flickity({
        setGallerySize: true,
        initialIndex: 0,
        cellSelector: '.carousel-cell',
        autoPlay: 1500,
        cellAlign: 'left',
        wrapAround: true
    });
})(jQuery); 