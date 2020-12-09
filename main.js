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
	    $('.js-drawer').toggleClass('on');
	  }

	// スライダー
	// var $setElm = $('.slider'),
    // fadeSpeed = 1500,
    // switchDelay = 3000;
 
    // $setElm.each(function(){
    //     var targetObj = $(this);
	// 	var findImg = targetObj.find('picture');
    //     var findLiFirst = targetObj.find('picture:first');
 
	// 	findImg.css({display:'block',opacity:'0',zindex:'99'});
	// 	findLiFirst.css({zIndex:'100'}).stop().animate({opacity:'1'},fadeSpeed);
 
    //     setInterval(function(){
    //         targetObj.find('picture:first-child').animate({opacity:'0'},fadeSpeed).next('li').css({zIndex:'100'}).animate({opacity:'1'},fadeSpeed).end().appendTo(targetObj).css({zIndex:'99'});
    //     },switchDelay);
    // });

    
});