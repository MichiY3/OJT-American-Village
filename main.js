$(function(){

    // ハンバーガーメニュー
	$('#btn').on('click',function(){
		let isActive = $(this).hasClass('on');
		toggleDrawer(isActive);
	});

	// ドロワー
	function toggleDrawer(isActive) {
	    $('.js-hamburger')
	    if (isActive) {
	      $('#drawer-bg').fadeOut(600);
	    } else {
	      $('#drawer-bg').fadeIn(600);
	    }
	    $('.js-hamburger').toggleClass('on');
	  }

	// スライダー
	let swipeOption = {
		loop: true,
		effect: 'fade',
		autoplay: {
		  delay: 3000,
		  disableOnInteraction: false,
		},
		speed: 1500,
	  }
	  new Swiper('.swiper-container', swipeOption);

	
	
	// ホバーで下線伸びる
	$('.shadow_box').on('mouseover', function(){
		$(this).find('span').animate({'width':'100%'}, 250)
	});
	// ホバーしてないなら元どおり
	$('.shadow_box').on('mouseleave', function(){
		$(this).find('span').animate({'width':'30%'}, 250)
	});

});