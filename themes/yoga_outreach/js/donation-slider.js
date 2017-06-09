(function($){
    $('.main-carousel').flickity({
        setGallerySize: true,
        initialIndex: 0,
        cellSelector: '.carousel-cell',
        cellAlign: 'left',
        wrapAround: true,
        resize: true,
        arrowShape: 'M 10,50 L 80,80 L 80,75 L 20,50  L 80,25 L 80,20 Z'
    });
})(jQuery);
