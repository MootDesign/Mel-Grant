(function ($) {
  $(document).ready(function(){

    // hide .navbar first

    //$(".navbar").hide(); 
    
    // fade in .navbar
    $(function () {
        $(window).scroll(function () {

                 // set distance user needs to scroll before we start fadeIn
            if ($(this).scrollTop() > 100) {
                //$('.animated').fadeOut();
            } else {
                //$('.animated').fadeIn();
            }

                // opacity text

            if ($(this).scrollTop() < 100) {
                $('.animated').css('opacity', '1').animate('slow');
            }
            if ($(this).scrollTop() > 110) {
                $('.animated').css('opacity', '0.8').animate('slow');
            }
            if ($(this).scrollTop() > 120) {
                $('.animated').css('opacity', '0.7').animate('slow');
            }
            if ($(this).scrollTop() > 130) {
                $('.animated').css('opacity', '0.6').animate('slow');
            }
            if ($(this).scrollTop() > 140) {
                $('.animated').css('opacity', '0.5').animate('slow');
            }
            if ($(this).scrollTop() > 150) {
                $('.animated').css('opacity', '0.4').animate('slow');
            }
            if ($(this).scrollTop() > 200) {
                $('.animated').css('opacity', '0.2').animate('slow');
            }
            if ($(this).scrollTop() > 300) {
                $('.animated').css('opacity', '0').animate('slow');
            }

            /* prova 2 if ($(this).scrollTop() > 100) {
                $('.animated').animate({opacity: '0.4'}, 100);
            } else {
                $('.animated').animate({opacity: '1'}, 100);
            } */     
        });
    });

});
  }(jQuery));