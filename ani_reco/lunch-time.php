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

<title>ランチタイムに優雅なひと時を♪｜お祝い・法要｜<?=SITE_NAME?></title>


<meta property="og:title" content="ランチタイムに優雅なひと時を♪｜お祝い・法要｜<?=SITE_NAME?>" />

<meta property="og:type" content="website">
<meta property="og:description" content="<?php echo DESCRIPTION ?>">
<meta property="og:url" content="<?php echo CANONICAL ?>">

<meta property="og:image" content="http://dev182.ultraworks.jp/recommend/assets_c/2018/09/_MG_27851-thumb-834xauto-11701.jpg" />
<link rel="amphtml" href="http://dev182.ultraworks.jp/ani_reco/amp/lunch_time.php" />


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

        <li>ランチタイムに優雅なひと時を♪</li>

    </ul>
</div>
<!--======================== //topic_path =====================================-->


<div class="content_inner">

	<div class="info_detail">
    	<p class="main"><img src="http://dev182.ultraworks.jp/recommend/assets_c/2018/09/_MG_27851-thumb-800xauto-11701.jpg" alt="ランチタイムに優雅なひと時を♪" /></p>
    	<div class="tit">
    		<h1>ランチタイムに優雅なひと時を♪</h1>
    		

<p class="cate">レストラン</p>
 
<p class="cate">堂満</p>
 
<p class="cate">王府井</p>

    	</div>
    	<div class="section_detail">
    		<p>1階 日本料理「堂満」・18階中国料理「王府井」で優雅に四季折々のランチを楽しみませんか?!</p>
<p>四季折々の旬の食材を使い、腕を振るう料理の数々をランチでお楽しみいただけます。<br>ご家族・友人などおしゃべりを満喫し、お腹も心も満たされませんか？！</p>
<p>■1階日本料理「堂満」■</p>
<p>ランチ限定の季節感あふれる月によってテーマを変えた和食昼膳『花御膳』や</p>
<p>平日または10食限定のランチメニューなど豊富なラインナップ「サービスランチ」などおすすめです！</p>
<p><a href="/restaurant/dohman/">★堂満のメニュー一覧はこちらから★</a></p>
<p><br>■18階中国料理「王府井」■</p>
<p>ホテル最上階にあるので、浜松城公園など絶好のロケーションを眺めながら優雅に中国料理を味わうことができます♪</p>
<p>旬の食材をたっぷり使用し、見た目でも楽しめる『レディースランチ 貴婦人』はランチタイムのおすすめです♪</p>
<p><a href="/restaurant/wongfu/">★王府井のメニュー一覧はこちらから</a>★</p>
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

        <li>ランチタイムに優雅なひと時を♪</li>

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
