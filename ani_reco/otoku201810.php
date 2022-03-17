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

<title>【お得情報】10月の月～金の夜限定！シャンゼリゼ ビュッフェ＆飲み放題が おトク！！｜お祝い・法要｜<?=SITE_NAME?></title>


<meta property="og:title" content="【お得情報】10月の月～金の夜限定！シャンゼリゼ ビュッフェ＆飲み放題が おトク！！｜お祝い・法要｜<?=SITE_NAME?>" />

<meta property="og:type" content="website">
<meta property="og:description" content="<?php echo DESCRIPTION ?>">
<meta property="og:url" content="<?php echo CANONICAL ?>">

<meta property="og:image" content="http://dev182.ultraworks.jp/recommend/assets_c/2018/09/ec3c05a268175c957e127c74ba346ea3_l-thumb-834xauto-11703.jpg" />
<link rel="amphtml" href="http://dev182.ultraworks.jp/ani_reco/amp/otoku201810.php" />


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

        <li>【お得情報】10月の月～金の夜限定！シャンゼリゼ ビュッフェ＆飲み放題が おトク！！</li>

    </ul>
</div>
<!--======================== //topic_path =====================================-->


<div class="content_inner">

	<div class="info_detail">
    	<p class="main"><img src="http://dev182.ultraworks.jp/recommend/assets_c/2018/09/ec3c05a268175c957e127c74ba346ea3_l-thumb-800xauto-11703.jpg" alt="【お得情報】10月の月～金の夜限定！シャンゼリゼ ビュッフェ＆飲み放題が おトク！！" /></p>
    	<div class="tit">
    		<h1>【お得情報】10月の月～金の夜限定！シャンゼリゼ ビュッフェ＆飲み放題が おトク！！</h1>
    		

<p class="cate">シャンゼリゼ</p>
 
<p class="cate">レストラン</p>

    	</div>
    	<div class="section_detail">
    		<p>月～金曜日の夜はビュッフェ＆飲み放題が お得♪<br>会社のお仲間やご家族･友人など皆さんで楽しい時間をシャンゼリゼで作りませんか？！</p>
<p>生ビールやハイボールなどが飲み放題！＆和洋中のホテルメイドのお料理とホテルパティシエのケーキが食べ放題♪</p>
<p>さらに10月はハロウィンスイーツも登場！<br>お酒が飲めない方も楽しめる内容になっています♪</p>
<p><a href="/restaurant/champs/dinner/">シャンゼリゼのお料理メニューや予約はこちらから</a></p>
<p>皆様のお越しをお待ちしております♪</p>
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

        <li>【お得情報】10月の月～金の夜限定！シャンゼリゼ ビュッフェ＆飲み放題が おトク！！</li>

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
