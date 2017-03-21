(function ($) {

    //do something when the icon button is clicked
    $('.fa-bars').on('click', function (event) {
        event.preventDefault();
        $('.menu-main-menu-container').toggleClass('submenu');
        $('.menu-main-menu-container').show();
    });

    $('.info-dropdown').click(function () {
        if ($(this).next('.info-field').is(':hidden')) {
            $(this).next('.info-field').slideDown('normal');
            $(this).children('span').text('-');
        } else {
            $(this).next('.info-field').slideUp('normal');
            $(this).children('span').text('+');
        }
    });

    $('a[href^="#"]').on('click', function (e) {
        e.preventDefault();
        $('html, body').animate({
            scrollTop: $($.attr(this, 'href')).offset().top
        }, 500);
    });


    (function ($) {
        var $window = $(window),
            $infoField = $('.info-field');

        function resize() {
            if ($window.width() > 720) {
                return $infoField.removeClass('info-field');
            } else {
                return $infoField.addClass('info-field');
            }

        }
        $window
            .resize(resize)
            .trigger('resize');


    })(jQuery);





})(jQuery); 
