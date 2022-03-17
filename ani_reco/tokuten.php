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

<title>自社ＨＰご予約特典のお知らせ｜お祝い・法要｜<?=SITE_NAME?></title>


<meta property="og:title" content="自社ＨＰご予約特典のお知らせ｜お祝い・法要｜<?=SITE_NAME?>" />

<meta property="og:type" content="website">
<meta property="og:description" content="<?php echo DESCRIPTION ?>">
<meta property="og:url" content="<?php echo CANONICAL ?>">

<meta property="og:image" content="http://dev182.ultraworks.jp/recommend/assets_c/2018/09/shukuhaku-thumb-834xauto-11804.jpg" />
<link rel="amphtml" href="http://dev182.ultraworks.jp/ani_reco/amp/tokuten.php" />


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

        <li>自社ＨＰご予約特典のお知らせ</li>

    </ul>
</div>
<!--======================== //topic_path =====================================-->


<div class="content_inner">

	<div class="info_detail">
    	<p class="main"><img src="http://dev182.ultraworks.jp/recommend/assets_c/2018/09/shukuhaku-thumb-800xauto-11804.jpg" alt="自社ＨＰご予約特典のお知らせ" /></p>
    	<div class="tit">
    		<h1>自社ＨＰご予約特典のお知らせ</h1>
    		

<p class="cate">宿泊</p>

    	</div>
    	<div class="section_detail">
    		<h3 class="point_title"><span class="txt"><img alt="bn01.jpg" src="http://dev182.ultraworks.jp/recommend/bn01.jpg" width="1000" height="206" class="mt-image-none"></span></h3>
<h3 class="point_title">特典.1<br>ベストレート保障</h3>
<p class="point_txt">自社サイトはいつでもベストレート保障♪</p>
<h3 class="point_title"><span class="txt">特典.2<br>公式サイトでご予約いただいた方限定！特典</span></h3>
<p class="point_txt">ミネラルウォーター ＋　キットカット or カロリーメイト　をプレゼント！<br><br>※チェックインの際、フロントにて自社サイトでご予約いただいた方に上記をプレゼント</p>
<h3 class="point_title"><span class="txt txt_little">特典.3<br><span class="txt">平面無料駐車場を完備</span><br></span></h3>
<p class="point_txt"><span>入出庫がラク♪車内に忘れ物をしても気軽に取りに行ける安心感。</span><br><span>平面無料駐車場をホテル敷地内に200台完備しています。</span><br><span>三方原スマートインターより車で15分！</span></p>
<h3 class="point_title"><span class="txt txt_little">特典.4<br>浜名湖パルパルオフィシャルホテル特典<br></span></h3>
<p class="point_txt">ホテル宿泊の当日と翌日は「浜名湖パルパル」の入園が無料<br><br>詳しくは＞＞＞<a href="/recommend/oficcal-hotel.php">オフィシャル特典ページへ</a></p>
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

        <li>自社ＨＰご予約特典のお知らせ</li>

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
