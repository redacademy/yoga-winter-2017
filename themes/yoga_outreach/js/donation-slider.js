(function($){
    $('.main-carousel').flickity({
        setGallerySize: true,
        initialIndex: 0,
        cellSelector: '.carousel-cell',
        autoPlay: 1500,
        cellAlign: 'left',
        wrapAround: true,
        arrowShape: 'M 0,50 L 60,00 L 50,30 L 80,30 L 80,70 L 50,70 L 60,100 Z'
    });
})(jQuery); 