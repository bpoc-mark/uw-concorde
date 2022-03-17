<?php include($_SERVER['DOCUMENT_ROOT']."/inc/config.php");?>
<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8" />
<link rel="icon" type="image/vnd.microsoft.icon" href="/favicon.ico">
<meta name="robots" content="index,follow">
<link rel="canonical" href="<?php echo CANONICAL ?>">
<meta name="keywords" content="<?php echo KEY_WORD ?>">
<meta name="description" content="<?php echo DESCRIPTION ?>">
<title><?php echo SITE_NAME ?></title>

<meta property="og:title" content="<?php echo SITE_NAME ?>">
<meta property="og:type" content="website">
<meta property="og:description" content="<?php echo DESCRIPTION ?>">
<meta property="og:url" content="<?php echo CANONICAL ?>">
<meta property="og:image" content="/images/fb_ogp-image.jpg">

<?php include($_SERVER['DOCUMENT_ROOT']."/inc/header_include.php");?>

<link href="/css/loader.css" media="print" rel="stylesheet">
<link href="/css/top.css?202203" media="print" rel="stylesheet">
<link href="/css/top.css?202203" media="screen and (min-width: 801px)" rel="stylesheet">
<link href="/sp/css/top.css?202203" media="only screen and (max-width: 800px)" rel="stylesheet">

<?php include($_SERVER['DOCUMENT_ROOT']."/inc/ga.php");?>
<?php include($_SERVER['DOCUMENT_ROOT']."/inc/tag/header_tag.php");?>
</head>
<body>
<?php include($_SERVER['DOCUMENT_ROOT']."/inc/tag/content_tag.php");?>
<div id="AllBox">

<!--======================== HeaderBox ===============================================-->
<div id="HeaderBox">
<?php include($_SERVER['DOCUMENT_ROOT']."/inc/header_box.php");?>
</div><!-- HeaderBox -->
<!--======================== //HeaderBox ===============================================-->

<!--======================== Contents ===============================================-->
<div id="Contents" class="cf">

<!--======================== Main =====================================-->
<div id="Main">

<div class="main_img">
    <ul class="slides">
        <!-- <li class="b bg09 sawa"><a href="https://www.concorde.co.jp/recommend/2022.php"><span><img src="sp/images/top/osechi.png" alt="2022年～おせち料理～ご予約承り中" class="sp"></span></a></li> -->
        <li class="b bg10 sawa"><a href="https://www.concorde.co.jp/restaurant/champs/lunch/"></a></li>
        <li class="b bg11 sawa"><a href="https://asp.hotel-story.ne.jp/ver3d/ASPP0200.asp?hidSELECTCOD1=82190&hidSELECTCOD2=001&hidSELECTPLAN=A639K&pac=P01&hidSELECTARRYMD=&hidSELECTHAKSU=1&rooms=1&selectptyp=&selectppsn=&hidk=&reffrom=&LB01=server5" target="_blank" rel="noopener"></a></li>
        <li class="b bg08 sawa"><a href="https://www.concorde.co.jp/anniversary/"></a></li>
        <li class="b bg07 sawa"><a href="/info/access.php#parking"></a></li>
        <!-- <li class="b bg00 sawa"><a href="https://www.concorde.co.jp/news/post-15.php"></a></li> -->
        <!-- <li class="b bg06 sawa"><a href="https://www.concorde.co.jp/news/post-14.php"></a></li>-->
        <!-- <li class="b bg01 sawa"><span>自然豊かな立地で<br>最高のおもてなしを</span></li> -->
        <!--<li class="b bg02 sawa"></li>-->
        <!-- <li class="b bg03 sawa"></li>
        <li class="b bg04 sawa"></li>
        <li class="b bg05 sawa"></li> -->
    </ul>

    <?php include($_SERVER['DOCUMENT_ROOT']."/news/imp.php");?>
</div>

<div class="newsbox pc">
	<p class="t1 sawa">お知らせ</p>
    <ul class="slides">
    <!--<li>
    <p class="t2"><a href="/pdf/party_note.pdf"><span class="incon date">2020.05.25</span>　<span class="tt">「新しい生活様式」の指針にのっとった宴会・会議の引き受けについて </span></a>　<a href="/news/"><span class="incon more">MORE</span></a></p>
    </li>-->
    <?php include($_SERVER['DOCUMENT_ROOT']."/news/top_pc.php");?>
    </ul>
</div>


	<p class="camp camp_top"><a href="/recommend/tokuten.php">
    <img src="images/top/bn01.jpg" alt="お得な5大特典" class="pc">
    <img src="sp/images/top/bn01.jpg" alt="お得な5大特典" class="sp">
    </a></p>

    <p class="camp"><a href="/workation/" target="_blank">
    <img src="images/top/workation.jpg" alt="ワーケーション×浜松" class="pc">
    <img src="sp/images/top/workation.jpg" alt="ワーケーション×浜松" class="sp">
    </a></p>
    
    
<div class="top_inner content_inner">


	<div class="form_wrap"><div class="form_in">
        <div class="tab cf"><div class="tabin">
            <ul>
                <li class="b1"><a href="javascript:void(0)" class="here"><span class="sawa">ご宿泊</span><img src="images/top/b01_b.png" class="pc" alt=""><span class="ar"><img src="sp/images/top/ar.png" class="sp" alt=""></span></a></li>
                <!--<li class="b2"><a href="javascript:void(0)"><span class="sawa">シャンゼリゼ</span><img src="images/top/b02_b.png" class="pc" alt=""><span class="ar"><img src="sp/images/top/ar.png" class="sp" alt=""></span></a></li>-->
            </ul>
        </div></div>
        
        <div class="formcon01">
            <div class="rate">
                <p class="t sawa"><span>ベストレート保証</span></p>
                <p class="t2">当サイトからのご予約で最低価格を保証いたします。</p>
                
                <p class="car sawa"><a href="/info/access.php#parking">駐車場無料</a></p>
            </div>
            
            <div class="form cf">
				<form id="Test1">
                    <span class="dynTabsHead style_block_area"></span>
                    <span class="dynGroup style_block_area"></span>
                    <span class="dynDP style_block_area"></span>
                    <span class="bookingDate style_block_area style_booking_inner"></span>
                    <span class="dynPersons style_block_area"></span>
                    <span class="dynPrice style_block_area"></span>
                    <span class="dynCategoryBooking style_block_area"></span>
                    <span class="dynCategoryRoom style_block_area"></span>
                    <span class="dynCategoryRoomType style_block_area"></span>
                    <span class="dynDispunit style_block_area"></span>
                    <span class="dynSubmit style_block_area"></span>
                </form>
                <div>
                    <hr />
                </div>
                <form id="Test2">
                    <span class="dynTabsHead style_block_area"></span>
                    <span class="dynGroup style_block_area"></span>
                    <span class="dynDP style_block_area"></span>
                    <span class="bookingDate style_block_area style_booking_inner"></span>
                    <span class="dynPersons style_block_area"></span>
                    <span class="dynPrice style_block_area"></span>
                    <span class="dynCategoryBooking style_block_area"></span>
                    <span class="dynCategoryRoom style_block_area"></span>
                    <span class="dynCategoryRoomType style_block_area"></span>
                    <span class="dynDispunit style_block_area"></span>
                    <span class="dynSubmit style_block_area"></span>
                </form>
    
            
            </div>
        </div>
        
        
        
    </div></div>
    
    <div class="planbox">
        <h2 class="def sawa">おすすめ情報</h2>
    
        <?php include($_SERVER['DOCUMENT_ROOT']."/recommend/top.php");?>
        
        <p class="morebtn"><a href="/recommend/" class="incon">MORE</a></p>
        
        <p class="event pc"><a href="/recommend/event/"><img src="images/top/bn02.jpg" alt="現在開催中のイベント"></a></p>
		<p class="event sp"><a href="/recommend/event/"><img src="sp/images/top/bn02.jpg" class="sp" alt="現在開催中のイベント"></a></p>
    </div>
    
    
    <div class="newsbox sp">
        <h2 class="def sawa">お知らせ</h2>
    	<ul class="slides">
        <!--<li>
            <div class="box"><a href="/pdf/party_note.pdf">
                <dl>
                    <dt class="incon">2020.05.25</dt>
                    <dd>「新しい生活様式」の指針にのっとった宴会・会議の引き受けについて</dd>
                </dl>
            </a></div>
            </li>-->
            <?php include($_SERVER['DOCUMENT_ROOT']."/news/top_sp.php");?>
        </ul>
        
        
        <p class="morebtn"><a href="/news/" class="incon">MORE</a></p>
    </div>
    
    
    <div class="roombox"><a href="/rooms/">
    	<div class="tit">
        	<p class="incon">STAY</p>
            <h2 class="sawa">ご宿泊</h2>
        </div>
        
        <p class="pc"><img data-original="/images/top/ph01.png" alt="ご宿泊" class="lazy"></p>
        <p class="sp"><img data-original="sp/images/top/ph01.png" alt="ご宿泊" class="lazy"></p>
        
        <div class="t pc">
        	<p class="txt">心からのホスピタリティと、きめ細やかなサービスで、浜松での快適なステイをお約束します。</p>
            <p class="more incon">MORE</p>
        </div>
    
    </a></div>
    
    <div class="restaurantbox"><a href="/restaurant/">
    	<div class="tit">
        	<p class="incon">RESTAURANT</p>
            <h2 class="sawa">レストラン</h2>
        </div>
        
        <p class="pc"><img data-original="/images/top/ph02.png" alt="レストラン" class="lazy"></p>
        <p class="sp"><img data-original="sp/images/top/ph02.png" alt="レストラン" class="lazy"></p>
        
        <div class="t pc">
        	<p class="txt">浜松でのひとときを美味しく、楽しくおもてなしするレストラン。<br>日帰りでのご利用のほか、ご宿泊とのセットプランもございます。</p>
            <p class="more incon">MORE</p>
        </div>
    
    </a>
    
    <div class="champs pc"><a href="/restaurant/">
        	<p class="img">
            <img data-original="images/top/ph02_02.png" alt="堂満" class="pc lazy">
            </p>
        </div></a>
	 <div class="champs sp"><a href="/restaurant/">
        	<p class="img">
            <img data-original="sp/images/top/ph02_02.png?220201" alt="堂満" class="sp lazy">
            </p>
        </div></a>
    
	<!--<div class="other_restaurant pc">
    	<ul class="cf">
        	<li><a href="/restaurant/dohman/">日本料理 - 堂満</a></li>
            <li><a href="/restaurant/concorde/">洋食 - bistro コンコルド</a></li>
            <li><a href="/restaurant/wongfu/">中国料理 - 王府井</a></li>
        </ul>
    </div>-->
    
	<div class="other_restaurant sp">
    	<!--<ul class="cf">
			<li><a href="/restaurant/champs/" class="rech"><img src="sp/images/top/ph01.jpg" alt="和洋中･ビュッフェ･ダイニング"></a><a href="/restaurant/champs/" class="other_ch"><span>和洋中･ビュッフェ･ダイニング</span><br>シャンゼリゼ</a></li>
        	<li><a href="/restaurant/" class="rech"><img src="sp/images/top/douman.jpg" alt="レストラン"></a><a href="/restaurant/dohman/" class="other_ch"><span>日本料理</span>&emsp;堂満</a></li>
            <li><a href="/restaurant/concorde/"><span>洋食</span>&emsp;bistro&emsp;コンコルド</a></li>
            <li><a href="/restaurant/wongfu/"><span>中国料理</span>&emsp;王府井</a></li>
        </ul>-->
    </div>
    </div>

    <div class="planbox oiwai_plan">
        <p class="event pc"><a href="/anniversary/" target="_blank"><img src="images/top/bn03.jpg" alt="お祝い・法要プラン"></a></p>
		<p class="event  o_event sp"><a href="/anniversary/" target="_blank"><img src="sp/images/top/bn03.jpg" class="sp" alt="お祝い・法要プラン"></a></p>
    </div>

    <div class="partybox"><a href="/party/">
    	<div class="tit">
        	<p class="incon">BANQUET</p>
            <h2 class="sawa">会議･宴会</h2>
        </div>
        
        <p class="pc"><img data-original="/images/top/ph04.png" alt="会議･宴会" class="lazy"></p>
        <p class="sp"><img data-original="sp/images/top/ph03.png" alt="会議･宴会" class="lazy"></p>
        
        <div class="t pc">
        	<p class="txt">当ホテルでは、お客様の様々なニーズに対応できるよう、最大1,000名様収容の大宴会・会議場を始め、大小19の宴会・会議場をご用意いたしております。</p>
            <p class="more incon">MORE</p>
        </div>
        </a>
        
        <div class="pc catering"><a href="/party/catering/">
        	<p class="img"><img data-original="images/top/bn01.png" alt="ケータリング" class="lazy"></p>
            <p class="tt">ケータリング</p>
        </div></a>
    
    </div>
    
    
    <div class="weddingbox"><a href="https://concordewedding.business.site/" target="_blank">
    	<div class="tit">
        	<p class="incon">WEDDING</p>
            <h2 class="sawa">ウェディング</h2>
        </div>
        
        <p class="pc"><img data-original="/images/top/ph03.png" alt="ウェディング" class="lazy"></p>
        <p class="sp"><img data-original="sp/images/top/ph04.png" alt="ウェディング" class="lazy"></p>
        
        <div class="t pc">
        	<p class="txt">浜松市内ホテル唯一の独立型チャペルと、お二人らしさを叶える多彩な披露宴会場。最高の結婚式をホテルコンコルド浜松がご提案いたします。</p>
            <p class="more incon">MORE</p>
        </div>
    
    </a></div>
    
        

    

    <div class="infobox"><a href="/info/">
    	<div class="tit">
        	<p class="incon">HOTEL INFORMATION</p>
            <h2 class="sawa">ホテル案内</h2>
        </div>
        
        <p class="pc"><img data-original="/images/top/ph05.png" alt="ホテル案内" class="lazy"></p>
        <p class="sp"><img data-original="sp/images/top/ph05.png" alt="会議･宴会" class="lazy"></p>
        
        <div class="t pc">
        	<p class="txt">ホテルコンコルド浜松の館内をご紹介。</p>
            <p class="more incon">MORE</p>
        </div>
    
    </a></div>
    
    
    <div class="gallery">
        <h2 class="def sawa">ギャラリー</h2>
    
        <ul class="cf">
        	<?php include($_SERVER['DOCUMENT_ROOT']."/gallery/top.php");?>
        </ul>
        
        
        <p class="morebtn"><a href="/gallery/" class="incon">MORE</a></p>    
    </div>
    
</div>
</div><!-- Main -->
<!--======================== //Main =====================================-->

<!--======================== SideBar =====================================-->
<div id="SideBar">
	<?php include($_SERVER['DOCUMENT_ROOT']."/inc/sidebar.php");?>
</div><!-- SideBar -->
<!--======================== //SideBar =====================================-->

</div><!-- Contents -->
<!--======================== //Contents ===============================================-->

</div><!-- AllBox -->

<!--======================== HeaderBox ===============================================-->
<div id="FooterBox">
<?php include($_SERVER['DOCUMENT_ROOT']."/inc/footer_box.php");?>
</div><!-- HeaderBox -->
<!--======================== //HeaderBox ===============================================-->

<?php include($_SERVER['DOCUMENT_ROOT']."/inc/tag/footer_tag.php");?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/lodash-compat/3.10.0/lodash.min.js"></script>
<script type="text/javascript" src="/Data/JSON.js" charset="utf-8"></script>
<script type="text/javascript" src="/src/dynjs/calculation.js" charset="utf-8"></script>
<script type="text/javascript" src="/src/dynjs/getURL.js" charset="utf-8"></script>
<script type="text/javascript" src="/src/dynjs/jkl-calendar.js" charset="Shift_JIS"></script>
<script type="text/javascript" src="/src/dynjs/exec.js" charset="utf-8"></script>

<script type="text/javascript" src="/js/jquery.lazyload.js" charset="utf-8"></script>

<script src="/js/lb/lightcase.js" type="text/javascript"></script>
<link href="/js/lb/lightcase.css" media="all" rel="stylesheet">

<script src="/js/ps/jquery.photoswipe.js" type="text/javascript"></script>
<link href="/js/ps/photoswipe.css" media="all" rel="stylesheet">

<script src="/js/fs/jquery.flexslider-min.js" type="text/javascript"></script>
<link href="/js/fs/flexslider.css" media="all" rel="stylesheet">

<script type="text/javascript">
$(window).load(function(){

	$('.main_img').flexslider({
		animation: "slide",
		animationLoop: true,
		slideshow: true,
		slideshowSpeed: 6000,
		animationSpeed: 1800,
		pauseOnAction: false,
		directionNav: false,
        /*after: function(slider){
            if (slider.currentSlide == 0) {
                $('#HeaderBox .nav ul li a').css('color','#323232');
                $('#HeaderBox .logo').addClass('blacklogo');
            } else {
                $('#HeaderBox .nav ul li a').css('color','#323232');
                $('#HeaderBox .logo').addClass('blacklogo');
            }
        }*/
	});

var w = $(window).width();

if( w > 800 ){
	$('a[data-rel^=lightcase]').lightcase();
} else {
	$('a[data-rel^=lightcase]').photoSwipe();
}

$('.newsbox').flexslider({
	animation: "slide",
	animationLoop: true,
	slideshow: true,
	slideshowSpeed: 5000,
	pauseOnAction: false,
	directionNav: false,
	controlNav: false
});


$('.tab .b1 a').click(function(){
	$('.tab a').removeClass('here');
	$(this).addClass('here');
	
	$('.formcon01').show();
	$('.formcon02').hide();
});

$('.tab .b2 a').click(function(){
	$('.tab a').removeClass('here');
	$(this).addClass('here');
	
	$('.formcon02').show();
	$('.formcon01').hide();
});

$( 'img.lazy' ).lazyload() ;

});
</script>
</body>
</html>
