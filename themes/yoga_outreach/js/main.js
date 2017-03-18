(function($){

//do something when the icon button is clicked
$('.menu-main-menu-container').hide();
    $('.fa-bars').on('click', function(event){
        event.preventDefault();
        $('.menu-main-menu-container').toggleClass('submenu');   
        $('.menu-main-menu-container').show();    
    });
})(jQuery);


    $('.info-dropdown').click(function () {
        if ($(this).next('.info-field').is(':hidden')) {
            $(this).next('.info-field').slideDown('normal');
            $(this).children('span').text('-');
        } else {
            $(this).next('.info-field').slideUp('normal');
            $(this).children('span').text('+');
        }
    });
(jQuery); 

    $('a[href^="#"]').on('click',function (e) {
        e.preventDefault();
        $('html, body').animate({
            scrollTop: $( $.attr(this, 'href') ).offset().top
        }, 500);
    });
<<<<<<< HEAD
(jQuery); 
=======
})(jQuery); 


>>>>>>> 97b4189f09a7305a311811f0935b5236397fc209
