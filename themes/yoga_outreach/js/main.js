(function ($) {
    var $window = $(window);
    var $infoField = $('.info-field');

    //dropdown submenu on clicking hamburger icon
    $('.fa-bars').on('click', function (event) {
        event.preventDefault();
        $('.menu-dropdown').toggleClass('show-dropdown');
        $('.menu-dropdown').show();
        $('.wrapper').hide();
    });
    //when on clicking signin button rest of content hides
    $('.signin-button-dropdown').on('click', function (event) {
      event.preventDefault();
      $('.wrapper').toggleClass('popup');
      $('.wrapper').show();
      $('.signin-button-dropdown').hide();
      $('.dropdown-menu-list').hide();
      $('.fa-bars').hide();
      $('.logo-image').hide();
      $('#content').hide();
      $('#colophon').hide();
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

    // Remove infoField Class
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

    //Click Read More dropdown
    $('.show-videos li:gt(2)').hide();
    $('.read-more').click(function() {
        $('.show-videos li:gt(2)').slideToggle('2000','linear');
        $(this).text($(this).text() == 'Read More' ? 'Read Less' : 'Read More');
    });

    // Changes radio buttons on forms
    $( '.gfield_radio li label' ).prepend( '<span></span>');

    // Blog Page on click cell shows article
    $(".carousel-cell").click(function () {
        $('.full-article').attr('data-post').slideToggle();
        return false;
    });

})(jQuery); 


    
