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


    var $window = $(window),
    $infoField = $('.info-field');
    function resize() {
        if ($window.width() > 720) {
            $infoField.removeClass('info-field');
        }else{
            $infoField.addClass('info-field');
        }
    }
        $window
            .resize(resize)
            .trigger('resize');

//Read More Read Less Function 
    $('.show-videos li:gt(2)').hide();
    $('.read-more').click(function() {
    $('.show-videos li:gt(2)').show();
    $('.read-less').click(function(){
    $('.show-videos li:gt(2)').hide();
    })
});


})(jQuery);

    




(jQuery);

   
