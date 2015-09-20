$(function(){

	$('.hamburger').on({

		click:function(e){
			e.preventDefault();
			if($('body').hasClass('menu-out')){
				$('body').removeClass('menu-out');
			}

			else{
				$('body').addClass('menu-out');
			}

		}
	});

});
