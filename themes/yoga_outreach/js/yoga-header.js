(function ($) {

    var daImage = image_data.image_path+'/arrow_drop_down_grey_192x192.png';

    $( '.menu-item-has-children > a' ).append('<img class="menu-dropdown-plus" src="'+daImage+'"/>');

    if ($(window).width() < 720) {
        $('.menu-item-has-children > a').removeClass('hide-menu-drop');
        $('.submenu').hide();
        $('.menu-item-has-children > a').on('click', function(event) {
            event.preventDefault();
            $(this).siblings('.sub-menu').toggle();
            $(this).parent().siblings('.menu-item-has-children').children('.sub-menu').hide();
        });
    }

    if ($(window).width() > 720) {
        // use hover
        $('.menu-dropdown-plus').hide();
        $('.menu-item').on('mouseover', function(event) {
            event.preventDefault();
            $(this).children('.sub-menu').toggle();
        });
        $('.menu-item').on('mouseout', function(event) {
            event.preventDefault();
            $(this).children('.sub-menu').hide();
        });
    }

    $(window).resize(function() {
        if ($(window).width() < 720) { $('.menu-dropdown-plus').removeClass('hide-menu-drop');}
    });


    $(window).resize(function() {
        if ($(window).width() > 720) {
            $('.menu-dropdown-plus').addClass('hide-menu-drop');
            $('.show-dropdown').hide();
        }
    });

    $('.sub-menu').hide();

    $('.menu-dropdown-plus').on('click',function(){
        $(this).children().find('.submenu').slideToggle();
    })

})(jQuery);

