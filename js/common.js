

$(function() {

	$('.pagetop').click(function(){
		$('body').animatescroll({scrollSpeed:1000,easing:'easeOutQuart'});
	});

	$('a[href^="#"]').click(function(){
    var speed = 1000;
    var href= $(this).attr("href");
    var target = $(href == "#" || href == "" ? 'html' : href);
    var position = target.offset().top;
    $("html, body").animate({scrollTop:position},speed,'easeOutQuart' );
    return false;
  });

	var w = $(window).width();

	if( w > 670 ){

	} else {

	}

	//navigation background
	$('.gn li a').hover(function(){
		$t = $(this).parent().attr('class');
		$('.navigation').addClass($t);
		$('.navigation').addClass('hover');
	},function(){
		$t = $(this).parent().attr('class');
		$('.navigation').removeClass($t);
		$('.navigation').removeClass('hover');
	});

	//navigation menu
	$('.menu-trigger').click(function(){
		if( $('#SideBar').hasClass('active') ){
			$('#SideBar').removeClass('active');
		} else {
			$('#SideBar').addClass('active');
		}
	});

	$(window).resize(resize_func);
	resize_func();

	$(window).scroll(scfunc);
	scfunc();


	$('.btn a').click(function(){
		$('.hover').addClass('active');
		$('p.n').addClass('active');
	});

	$('.hover img').click(function(){
		$('.hover').removeClass('active');
		$('p.n').removeClass('active');
	});


	$('#SideBar .lang a').click(function(){
		if( $('.lang_over').hasClass('open') ){
			$('.lang_over').removeClass('open');
		} else {
			$('.lang_over').addClass('open');
		}
	});

	$('.lang_over .close a').click(function(){
		$('.lang_over').removeClass('open');
	});

});

function resize_func(){
	var h = $(window).height();
	var w = $(window).width();

	if( w < 670 ){
		$('#SideBar').css('height', h+25+'px');
		$('.hover').css('height', h+25+'px');

		$('.main_img_detail .bg').css('height', h-155+'px');
		$('.main_img_detail ul li').css('height', h-155+'px');
		$('.modal .inner').css('height', h-71+'px');
	} else {
		$('.modal .inner .mbox').css('height', h-96+'px');
	}

	$('.main_img .b').css('height', h+'px');
	// $('.main_img').css('height', h+'px');

}

function scfunc(){

	var t = $(this).scrollTop();
	var w = $(window).width();
	var h = $(window).height();

	if( t > 100 ){
		$('.pagetop').fadeIn();
		$('#HeaderBox .logo').fadeOut();
	} else {
		$('.pagetop').fadeOut();
		$('#HeaderBox .logo').fadeIn();
	}

	if( w < 670 ){
		$('#HeaderBox .Navigation').css('height', h+25+'px');
	}

}

// $(function() {

// 	//ローディングの設定
// 	  var loadCount = 0,
// 		imgLength = $("img").length;
// 	$("img").each(function() {
// 	  var src = $(this).attr("src");
// 	  $("<img>")
// 	  .attr("src", src)
// 	  .on('load', function() {
// 		loadCount++;
// 	  });
// 	});
  
// 	var timer = setInterval(function() {  //読み込みをスタイルに反映させる
// 		$("#loader-bg .loader").css({
// 		  "width": (loadCount / imgLength) * 100 + "%"
// 		});
// 		if((loadCount / imgLength) * 100 == 100){ //100%読み込んだら
// 		  clearInterval(timer);
// 		  $("#loader-bg").delay(500).fadeOut(800);
// 		}
// 	}, 5);
  
// 	setTimeout(function(){  //ロードが終わらなくても5sで終了させる
// 	  $("#loader-bg").delay(500).fadeOut(300);
// 	}, 2000);
// 	// ローディングの設定ここまで
// });