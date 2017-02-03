/* $(".b-team").hover(function(event){
	//var target = $(event.target);
	//var opacity = 0;
	$(".popinfo").removeClass('opacity');
}); */

/* START Team Banner Bottom */
/*
    $(".b-team").mouseover(function(){
	$(this).children(".popinfo").removeClass("opacity");
});

    $(".b-team").mouseout(function(){
	$(".popinfo").addClass("opacity");
});

    $( ".custom-w-col" ).hover(function() {

	  $(".custom-w-col").animate({
	    opacity: 1,
	  }, 100, function() {

	  });
	  	   $(this).css("opacity", "0.4");
});

/* END Team Banner Bottom */




var $belgravias = $('.b-team');

    $belgravias.hover(function () {
        $(this).find('.popinfo').stop().animate({
            'opacity': '1'
        }, 300);
        $belgravias.not(this).stop().animate({
            'opacity': '0.4'
        }, 300);
    }, function () {
        $(this).find('.popinfo').stop().animate({
            'opacity': '0'
        }, 300);
        $belgravias.stop().animate({
            'opacity': '1'
        }, 300);
    });
