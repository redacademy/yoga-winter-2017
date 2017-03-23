(function ($) {
    var $window = $(window);
    var $infoField = $('.info-field');

    //dropdown submenu on clicking hamburger icon
    $('.fa-bars').on('click', function (event) {
        event.preventDefault();
        $('.menu-main-menu-container').toggleClass('submenu');
        $('.menu-main-menu-container').show();
    });

      $('#menu-item-123','.cross').on('click', function (event) {
      event.preventDefault();
   $('.menu-main-menu-container').toggleClass('submenu');
        $('.menu-main-menu-container').show();
    });

    //dropdown signin section on clicking signin button
    $('.signin-button').on('click', function (event) {
      event.preventDefault();
      $('.wrapper').toggleClass('popup');
      $('.wrapper').show();
      $('.signin-button').hide();
    });

    

    // Drop down category
    $('.info-dropdown').click(function () {
        if ($(this).next('.info-field').is(':hidden')) {
            $(this).next('.info-field').slideDown('normal');
            $(this).children('span').text('-');
        } else {
            $(this).next('.info-field').slideUp('normal');
            $(this).children('span').text('+');
        }
    });


    function resize() {
        if ($window.width() > 720) {
            $infoField.removeClass('info-field');
            $infoField.css('display','block');
            

    } else {
            $infoField.addClass('info-field');
            $infoField.css('display','none');
        }
    }
    $window.resize(resize).trigger('resize');


    // Smooth Scroll between sections on a page
    $('a[href^="#"]').on('click', function (e) {
        e.preventDefault();
        $('html, body').animate({
            scrollTop: $($.attr(this, 'href')).offset().top
        }, 500);
    });

    // Changes radio buttons on forms
    $( '.gfield_radio li label' ).prepend( '<span></span>');
})(jQuery); 


    
