$(function(){if($('.site-nav').length){

    var lastScrollTop = 0,
        fancyScroll = $('.site-nav');

    $(window).on('scroll', function () {

        var st = $(this).scrollTop(),
            diff = st - lastScrollTop,
            scrollStop = $(window).innerHeight() + $(window).scrollTop(),
            fancyHeight = fancyScroll.offset().top + fancyScroll.innerHeight(),
            fancyScrollAmount = fancyScroll.scrollTop() + diff;

		if($('body').hasClass('fixed') && !smamo_nav_fancy_manu_nav_animation_block){

			fancyScroll.scrollTop(fancyScrollAmount);
		}

		else{
			fancyScroll.scrollTop(0);
		}

		lastScrollTop = st;
        
    });
}});