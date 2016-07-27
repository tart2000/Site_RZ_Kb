var targetOffset = $("#blurb").offset().top;

var $w = $(window).scroll(function() {
    if ( $w.scrollTop() > targetOffset ) {   
        $('.navbar').css({"background-color":"white"});
    } else {
    	$('.navbar').css({"background-color":"transparent"});
    }
});

