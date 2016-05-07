$(document).ready(function(){
  $(window).resize(function(){

    $('.event-slider .panel-body').each(function(){
      var dHeight = $('.past-event').height() - 47;
      if( $(window).width() > 991 ) {
        $(this).css('height', dHeight);
      }else if($(window).width() < 991 ) {
        $(this).css('height', dHeight);
      };
    });


    $('.news-image-big').each(function(){
      var dHeight = $(this).css('height');
      if( $(window).width() > 991 ) {
        $('.panel-news-detail').css('height', dHeight);
      }else if($(window).width() < 991 ) {
        $('.panel-news-detail').css('height', dHeight);
      };
    });

  }).resize();

  app.init();
  $('.side-upcoming-event .panel-body').niceScroll({
    scrollspeed: 10,
    mousescrollstep: 5,
    styler: 'fb',
    cursorcolor: '#66adcd',
    cursorborderradius: '5px',
    cursorwidth: '7px',
    hidecursordelay: '1000'
  });

  $('video').videoPlayer({
    'playerWidth' : '1',
    'videoClass' : 'Video'
  });
});