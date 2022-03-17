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

<title>★ラウンジ情報★ホテルパティシエ特製 ジュレ登場♪｜お祝い・法要｜<?=SITE_NAME?></title>


<meta property="og:title" content="★ラウンジ情報★ホテルパティシエ特製 ジュレ登場♪｜お祝い・法要｜<?=SITE_NAME?>" />

<meta property="og:type" content="website">
<meta property="og:description" content="<?php echo DESCRIPTION ?>">
<meta property="og:url" content="<?php echo CANONICAL ?>">

<meta property="og:image" content="http://dev182.ultraworks.jp/recommend/assets_c/2018/09/%E3%83%80%E3%83%96%E3%83%AB%E3%82%B1%E3%83%BC%E3%82%AD%E3%82%BB%E3%83%83%E3%83%88image-thumb-834xauto-11702.jpg" />
<link rel="amphtml" href="http://dev182.ultraworks.jp/ani_reco/amp/lounji2018.php" />


<?php include($_SERVER['DOCUMENT_ROOT']."/inc/header_include.php");?>

<link href="/css/info.css" media="print" rel="stylesheet">
<link href="/css/info.css" media="screen and (min-width: 801px)" rel="stylesheet">
<link href="/sp/css/info.css" media="only screen and (max-width: 800px)" rel="stylesheet">

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
<div id="Main" class="noside">

<div class="main_img_detail">
	<div class="tit">
    	<p class="cap">&nbsp;</p>
        <h1 class="sawa">お祝い・法要</h1>
        <p class="sub incon">ANNIVERSARY</p>
    </div>
</div>

<!--======================== topic_path =====================================-->
<div class="topic_path">
	<ul>
    	<li class="home"><a href="/">浜松のホテルコンコルド浜松 ホーム</a></li>
        <li><a href="/anniversary/">お祝い・法要</a></li>

        <li>★ラウンジ情報★ホテルパティシエ特製 ジュレ登場♪</li>

    </ul>
</div>
<!--======================== //topic_path =====================================-->


<div class="content_inner">

	<div class="info_detail">
    	<p class="main"><img src="http://dev182.ultraworks.jp/recommend/assets_c/2018/09/%E3%83%80%E3%83%96%E3%83%AB%E3%82%B1%E3%83%BC%E3%82%AD%E3%82%BB%E3%83%83%E3%83%88image-thumb-800xauto-11702.jpg" alt="★ラウンジ情報★ホテルパティシエ特製 ジュレ登場♪" /></p>
    	<div class="tit">
    		<h1>★ラウンジ情報★ホテルパティシエ特製 ジュレ登場♪</h1>
    		

<p class="cate">ボンジュール</p>

    	</div>
    	<div class="section_detail">
    		<p>ホテルパティシエ特製のスイーツと共に優雅なティータイムを♪<br>ティーラウンジ『ボンジュール』に、季節限定の夏にピッタリなさっぱり感のあるホテルパティシエ特製ジュレが登場♪</p>
<p><span><strong>★桃とフランボアのゼリー</strong> 　400円</span></p>
<p>山梨県産の桃をコンポートにして使用し、<br>フランボアのゼリーと合わせ夏にピッタリなさっぱり感のある仕上がりです。</p>
<p><span><strong>★宮崎県産完熟マンゴーのせマンゴープリン　400円</strong></span></p>
<p><span>7月限定メニュー</span><br>濃厚な甘さをお楽しみいただける宮崎県産の完熟マンゴーが魅力♪<br>マンゴーピューレと一緒にお召し上がりください。</p>
<p>※メニューは予告なく変更又は中止となる場合がございます。</p>
<p><a href="http://concorde.co.jp/restaurant/bonjour/">他のメニューはこちらから</a></p>
    	</div>
    </div>


	<!--======================== pager ======================-->
    <div class="pager">
    <ul><li><a href="/anniversary/" class="link_page ja">一覧へ戻る</a></li></ul>
    </div>
    <!--======================== //pager ======================-->


<!--======================== topic_path =====================================-->
<div class="topic_path_sp">
	<ul>
    	<li class="home"><a href="/">浜松のホテルコンコルド浜松 ホーム</a></li>
        <li><a href="/anniversary/">お祝い・法要</a></li>

        <li>★ラウンジ情報★ホテルパティシエ特製 ジュレ登場♪</li>

    </ul>
</div>
<!--======================== //topic_path =====================================-->
</div>

</div><!-- Main -->
<!--======================== //Main =====================================-->

</div><!-- Contents -->
<!--======================== //Contents ===============================================-->

</div><!-- AllBox -->

<!--======================== HeaderBox ===============================================-->
<div id="FooterBox">
<?php include($_SERVER['DOCUMENT_ROOT']."/inc/footer_box.php");?>
</div><!-- HeaderBox -->
<!--======================== //HeaderBox ===============================================-->

<?php include($_SERVER['DOCUMENT_ROOT']."/inc/tag/footer_tag.php");?>
<script type="text/javascript">
$(function($) {
	var w = $(window).width();
	if( w > 800 ){
		$('.planbox .tit').matchHeight();
	}
	
	$('#sel').change(function(){
	var selector = $(this).val();
	location.href = selector;
	});

	$('.section_body img').each(function(){
		$(this).removeAttr("height");
		if( $(this).attr('width') > 290 || $(this).width() - 0 > 290 ){
			$(this).addClass('w');
		}
	});
	var rel = $('.rec_cate').attr('rel');
	$('.rec_cate li a').each(function(){
		var rel2 = $(this).attr('rel');
		if( rel == rel2 ){
			$(this).addClass('here');
		}
	});
	$('.rec_cate option').each(function(){
		var rel2 = $(this).attr('rel');
		if( rel == rel2 ){
			$(this).attr('selected','selected');
		}
	});
});
</script>

</body>
</html>
