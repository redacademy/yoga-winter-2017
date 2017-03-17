(function($){
//do something when the icon button is clicked
    $('.fa-bars').on('click', function(event){
        event.preventDefault();
        $('.fa-bars').toggleClass('menu');   
        // $('.menu-main-menu-container ul').toggleClass('menu');     
    });
})(jQuery);