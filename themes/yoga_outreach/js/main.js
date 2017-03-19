(function($){

//do something when the icon button is clicked
$('.menu-main-menu-container').hide();
    $('.fa-bars').on('click', function(event){
        event.preventDefault();
        $('.menu-main-menu-container').toggleClass('submenu');   
        $('.menu-main-menu-container').show();    
    });
<<<<<<< HEAD
=======

>>>>>>> 966e8edc7f6a7cf7a3588b24302b7e55655da071

    $('.info-dropdown').click(function () {
        if ($(this).next('.info-field').is(':hidden')) {
            $(this).next('.info-field').slideDown('normal');
            $(this).children('span').text('-');
        } else {
            $(this).next('.info-field').slideUp('normal');
            $(this).children('span').text('+');
        }
<<<<<<< HEAD
    }); 
=======
    });
>>>>>>> 966e8edc7f6a7cf7a3588b24302b7e55655da071

    $('a[href^="#"]').on('click',function (e) {
        e.preventDefault();
        $('html, body').animate({
            scrollTop: $( $.attr(this, 'href') ).offset().top
        }, 500);
    });
<<<<<<< HEAD

})(jQuery); 
=======
(jQuery); 
(jQuery); 

})(jQuery); 

>>>>>>> 966e8edc7f6a7cf7a3588b24302b7e55655da071
