'use strict';
$ = jQuery;

$(function(){
  //HOME PAGE
  var bannerImage = $('.parallax-window');
  bannerImage.velocity({ scale: 1.2 });
  bannerImage.velocity({ opacity: 1 }, 50, "ease");

  setTimeout(function(){
    $('.parallax-window').velocity({ scale: 1 }, 2500, "easeInOutSine");
  }, 100);
  setTimeout(function(){
    $('.site-name').velocity("transition.slideRightIn", {duration: 2200});
    setTimeout(function(){
      $('.site-desc').velocity("transition.slideRightIn", {duration: 1500});
    }, 1200);
  }, 1600);

  $('#burger-menu1').on('click', function(){
    $(this).toggleClass('is-active');
    $('#myNav').toggleClass('active');
  });

  //parallax
  function parallax(scrolled){
      $('#home-banner-wrapper').css('top', (scrolled * 0.5) + 'px');
      var parallaxOpacity = (1-((scrolled) * 0.01 * 0.4).toFixed(2));
      var parallaxRight = -(scrolled * 0.2);

      $('.site-name').css({opacity: parallaxOpacity, marginRight: parallaxRight});
      $('.site-desc').css({opacity: parallaxOpacity, marginRight: parallaxRight*0.5});
      if(scrolled <= 40){
        //$('.site-name').velocity("transition.slideRightOut", {duration: 300});
      }
  }

  var aboutMeTriangle = $('.home-about');
  var aboutMeTriangleOffsetTop = aboutMeTriangle.offset().top;

  $(window).on('scroll', function(){
    var scrolled = $(window).scrollTop();
    parallax(scrolled);

    console.log('top: '+scrolled+', offset: '+aboutMeTriangleOffsetTop);
    if(scrolled >= aboutMeTriangleOffsetTop){
        aboutMeTriangle.addClass('fixed');
    }else{
        aboutMeTriangle.removeClass('fixed');
    }
  });
});
