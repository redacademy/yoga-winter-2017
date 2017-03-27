(function ($) {
    var $window = $(window);
    var $infoField = $('.info-field');

      //making search form appear on desktop
     $('.fa-search').on('click', function(event){
        event.preventDefault();
        $('.search-field').toggleClass('searchAppear');
        $('.search-field').focus();    
    });
    $('.search-field').blur(function() {
        $('.fa-search').click();
    });

    //dropdown submenu on clicking hamburger icon
    $('.show-dropdown').hide();
    $('.fa-bars').on('click', function (event) {
        event.preventDefault();
        $('.show-dropdown').slideToggle();
        $('.wrapper').hide();
        $('#content').show();
        $('#colophon').show();
    });

    //on mobile when clicking signin button
    $('.menu-item-73').on('click', function (event) {
        event.preventDefault();
        $('.wrapper').show();
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
        $('.header-subtitle').text('to your Yoga Outreach Core Training'); 
      } else {
        $infoField.addClass('info-field');
        $infoField.css('display','none');
        $('.header-subtitle').text('to your online course');
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
    $('.carousel-cell').on('click', function(e){
      e.preventDefault();
      var id = $('article', this).attr('data-post');

      $('.full-article .post').hide();
      $('#' + id).show();
    });

    // Blog Page on click next shows correct article
    $('.blog-next-button').on('click', function(e){
      e.preventDefault();
      var current = $('.full-article .post:visible');
      if(current.next('.full-article .post').length){
        current.hide();
        current.next('.full-article .post').show();
      }
    });

    // Blog Page on click prev shows correct article
    $('.blog-prev-button').on('click', function(e){
      e.preventDefault();
      var current = $('.full-article .post:visible');
      if(current.prev('.full-article .post').length){
        current.hide();
        current.prev('.full-article .post').show();
      }
    });

    $('.post:first-child').show();

    // Letter Count for read more text 
    $('.article-text').each(function(){
      var max_length = 167; 
      if($(this).html().length > max_length){ 
        var short_content 	= $(this).html().substr(0,max_length); 
        var long_content	= $(this).html().substr(max_length);
        
        $(this).html(short_content+
              '<a href="#" class="read-more"><br/>Read More...</a>'+
              '<span class="more-text" style="display:none;">'+long_content+'</span>');
              
        $(this).find('a.read-more').click(function(event){ 
  
          event.preventDefault(); 
          $(this).hide();
          $(this).parents('.article-text').find('.more-text').show();
        });
      }
    });

    function containRemove() {
    if ($(window).width() < 720) {
          $('#retreat').addClass('container2');
      } else {
          $('#retreat').removeClass('container2');
      }
    }
    $(window).resize(containRemove);

    $('.dropdown-paragraph').each(function(){
      var max_length = 50; 
      if($(this).html().length > max_length){ 
        var short_content 	= $(this).html().substr(0,max_length); 
        var long_content	= $(this).html().substr(max_length);
        
        $(this).html(short_content+'<span class="more-text" style="display:none;">'+long_content+'</span>'+
              '<a href="#" class="read-more"><br/>Read More</a>'
              );
              
        $(this).find('a.read-more').click(function(event){ 
          event.preventDefault(); 
          // $(this).hide();
          $(this).parents('.dropdown-paragraph').find('.more-text').toggle('2000','swing');
          $(this).text($(this).text() == 'Read More' ? 'Read Less' : 'Read More');
        });
      }
    });
    

})(jQuery); 

