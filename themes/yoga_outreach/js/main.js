(function($){
    $('.info-dropdown').click(function () {
        if ($(this).next('.info-field').is(':hidden')) {
            $(this).next('.info-field').slideDown('fast');
            $(this).children('span').text('-');
        } else {
            $(this).next('.info-field').slideUp('fast');
            $(this).children('span').text('+');
        }
    });
})(jQuery); 