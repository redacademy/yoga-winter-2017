(function($){

//do something when the icon button is clicked
    $('.fa-bars').on('click', function(event){
        event.preventDefault();
        $('.fa-bars').toggleClass('menu');   
        // $('.menu-main-menu-container ul').toggleClass('menu');     
    });
})(jQuery);

    $('.info-dropdown').click(function () {
        if ($(this).next('.info-field').is(':hidden')) {
            $(this).next('.info-field').slideDown('fast');
            $(this).children('span').text('-');
        } else {
            $(this).next('.info-field').slideUp('fast');
            $(this).children('span').text('+');
        }
    });
(jQuery); 
