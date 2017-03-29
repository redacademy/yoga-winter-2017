(function ($) {

    var daImage = image_data.image_path+'/cross_icon.png';

    $( '.menu-item-has-children > a' ).after('<span class="menu-dropdown-plus"><img src="'+daImage+'"/></span>');

    if ($(window).width() < 720) {
        $('.menu-dropdown-plus').removeClass('hide-menu-drop');
        $('.submenu').hide();
        $('.menu-dropdown-plus').on('click', function(event) {
            console.log('hello')
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
        if ($(window).width() > 720) { $('.menu-dropdown-plus').addClass('hide-menu-drop');}
    });

    $('.sub-menu').hide();

    $('.menu-dropdown-plus').on('click',function(){
        $(this).children().find('.submenu').slideToggle();
    })

})(jQuery); 

