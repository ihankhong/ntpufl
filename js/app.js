$(document).ready(function() {
	$(".owl-carousel").owlCarousel({
		items : 1,
		loop : true,
		autoplay : true,
		autoplayHoverPause:true,
		dots: true,
		nav: true,
		navText : ["<i class='fa fa-chevron-left'></i>","<i class='fa fa-chevron-right'></i>"],
		animateOut: 'slideOutDown',
    	animateIn: 'bounceInRight',
		responsive:{
			0:{
				nav:false,
			},
			768:{
				nav:true,
			}
		}
	});

	$(window).scroll(function () {
        if ($(this).scrollTop() > 100) {
            $('#back-to-top').fadeIn();
        } else {
            $('#back-to-top').fadeOut();
        }
    });

    // scroll body to 0px on click
    $('#back-to-top').click(function () {
        $('#back-to-top').tooltip('hide');
        $('body,html').animate({
            scrollTop: 0
        }, 800);
        return false;
    });
    
    $('#back-to-top').tooltip('show');
});
