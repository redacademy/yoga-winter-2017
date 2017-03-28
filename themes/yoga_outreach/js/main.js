(function ($) {
    var $window = $(window);
    var $infoField = $('.info-field');

      //making search form appear on desktop
     $('.fa-search').on('click', function(event){
        event.preventDefault();
        $('.search-field').toggleClass('searchAppear');
        $('.search-field').focus();    
    });

    //click on menu in mobile toggle submenu
$(window).resize(function() {
  if ($(window).width() > 720) {
     // use hover
      $('.menu-item').on('mouseover', function(event) {
        event.preventDefault();
        $(this).children('.sub-menu').show();
      });
      $('.menu-item').on('mouseout', function(event) {
        event.preventDefault();
        $(this).children('.sub-menu').hide();
      });
  }
  else {
    //use click
  }
});

// $(window).resize(function() {
//   if ($(window).width() < 720) {
//      // use hover
//      $('.submenu').hide();
//       $('.menu-item').on('click', function(event) {
//         event.preventDefault();
//         $(this).children('.sub-menu').slideDown();
//       });
//   }
// });


// $( '.menu-item-has-children' ).append( '<span class="menu-dropdown-plus">+</span>');

// $('.menu-dropdown-plus').on('click', function(event) {
//     event.preventDefault();
//     console.log('hello');
// });
        


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
    $('.info-dropdown, .event-dropdown').click(function () {
      if ($(this).next('.info-field, .event-info').is(':hidden')) {
        $(this).next('.info-field, .event-info').slideDown('normal');
        $(this).children('span').text('-');
      } else {
        $(this).next('.info-field, .event-info').slideUp('normal');
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
      if($('.media-item').length <= 3){
        $('.read-more').text('Sorry there is no futher media');
      }else{
        $('.show-videos li:gt(2)').slideToggle('2000','linear');
        $(this).text($(this).text() == 'Read More' ? 'Read Less' : 'Read More');
      }
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
              '<a href="#" id="read-more"><br/>Read More</a>'
              );
              
        $(this).find('#read-more').click(function(event){ 
            event.preventDefault(); 
            $(this).parents('.dropdown-paragraph').find('.more-text').toggle('2000','swing');
            $(this).text($(this).text() == 'Read More' ? 'Read Less' : 'Read More');
          });
      }
    });

    //Who We Are Popup 
    $('.member-contain').on('click', function(event){
        event.preventDefault();
        $('.popup-description').empty();
        $('.staff-popup').fadeIn('2000','linear');
        $('.accent-name-shape').css('display','none');
        $(this).clone().appendTo('.popup-description');
        $(this).clone().find('.staff-info').css('display', 'block').appendTo('.popup-description');
        $(this).clone().find('.staff-description').css('display', 'block').appendTo('.popup-description');
        $('.who-we-are-content main').addClass('fade-background');
            $('.exit-button').on('click',function(event){
            event.preventDefault();
            $('.staff-popup').fadeOut('1000','linear');
            $('.who-we-are-content main').removeClass('fade-background');
            $('.accent-name-shape').css('display','block');
        });
    });


})(jQuery); 

