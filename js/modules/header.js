waitUntilExists("site-header",function(){
	var zenCookie = Cookies.get('zenmode');
	if(zenCookie === 'on'){
		$('body').addClass('zen-mode no-anim');
		setTimeout(function(){
			$('body').removeClass('no-anim');
		},100);
	}
})

$(function(){

	$('.hamburger').on({

		click:function(e){
			e.preventDefault();

			if($(window).width() < 960 ){

				if($('body').hasClass('menu-out')){
					$('body').removeClass('menu-out');
				}

				else{
					$('body').addClass('menu-out');
				}
			}

			else{

				if($('body').hasClass('zen-mode')){
					$('body').removeClass('zen-mode');
					Cookies.set('zenmode','off', { expires: 7, path: '/' });
				}

				else{
					$('body').addClass('zen-mode');
					Cookies.set('zenmode','on', { expires: 7, path: '/' });
				}

			}
		}
	});

});
