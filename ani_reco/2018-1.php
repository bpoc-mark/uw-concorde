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

<title>団体様向け！秋のパーティープラン～2018年秋～｜お祝い・法要｜<?=SITE_NAME?></title>


<meta property="og:title" content="団体様向け！秋のパーティープラン～2018年秋～｜お祝い・法要｜<?=SITE_NAME?>" />

<meta property="og:type" content="website">
<meta property="og:description" content="<?php echo DESCRIPTION ?>">
<meta property="og:url" content="<?php echo CANONICAL ?>">

<meta property="og:image" content="http://dev182.ultraworks.jp/recommend/assets_c/2018/09/party201809-thumb-834xauto-11694.jpg" />
<link rel="amphtml" href="http://dev182.ultraworks.jp/ani_reco/amp/2018_1.php" />


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

        <li>団体様向け！秋のパーティープラン～2018年秋～</li>

    </ul>
</div>
<!--======================== //topic_path =====================================-->


<div class="content_inner">

	<div class="info_detail">
    	<p class="main"><img src="http://dev182.ultraworks.jp/recommend/assets_c/2018/09/party201809-thumb-800xauto-11694.jpg" alt="団体様向け！秋のパーティープラン～2018年秋～" /></p>
    	<div class="tit">
    		<h1>団体様向け！秋のパーティープラン～2018年秋～</h1>
    		

<p class="cate">会議･宴会</p>

    	</div>
    	<div class="section_detail">
    		<div id="contents">
<p class="labels"><span class="label">★ホテルコンコルド浜松が贈る秋の味覚祭り★<br><span class="label">ビジネス・</span><span class="label">団体様向けのご宴会プランが登場！</span><br>和洋中のシェフが作り出すホテルメイドの味をお楽しみください。<br>宴会スタイルと選べる料理で幹事さんも楽々♪</span><span class="label"><br><br>対象期間/2018年9月1日(土)～2019年11月30日(金)</span></p>
<p class="labels"><span class="label"><a href="http://concorde.co.jp/wp/wp-content/uploads/2018/08/autumn2018.pdf"><img alt="party201809_2.jpg" src="http://dev182.ultraworks.jp/recommend/party201809_2.jpg" width="800" height="2419" class="mt-image-center" style="text-align: center; display: block; margin: 0 auto 20px;"></a></span></p>
</div>
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

        <li>団体様向け！秋のパーティープラン～2018年秋～</li>

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
