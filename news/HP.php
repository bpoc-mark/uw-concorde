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

<title>ホームページ リニューアルのお知らせ｜お知らせ｜<?=SITE_NAME?></title>


<meta property="og:title" content="ホームページ リニューアルのお知らせ｜お知らせ｜<?=SITE_NAME?>" />

<meta property="og:type" content="website">
<meta property="og:description" content="<?php echo DESCRIPTION ?>">
<meta property="og:url" content="<?php echo CANONICAL ?>">

<meta property="og:image" content="http://dev182.ultraworks.jp/news/assets_c/2018/09/top-thumb-834xauto-11803.jpg" />
<link rel="amphtml" href="http://dev182.ultraworks.jp/news/amp/HP.php" />


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
<div id="Main">

<div class="main_img_detail">
	<div class="tit">
    	<p class="cap">&nbsp;</p>
        <h1 class="sawa">お知らせ</h1>
        <p class="sub incon">NEWS</p>
    </div>
</div>

<!--======================== topic_path =====================================-->
<div class="topic_path">
	<ul>
    	<li class="home"><a href="/">浜松のホテルコンコルド浜松 ホーム</a></li>
        <li><a href="/news/">お知らせ</a></li>

        <li>ホームページ リニューアルのお知らせ</li>

    </ul>
</div>
<!--======================== //topic_path =====================================-->


<div class="content_inner">

	<div class="info_detail">
    	<p class="main"><img src="http://dev182.ultraworks.jp/news/assets_c/2018/09/top-thumb-800xauto-11803.jpg" alt="ホームページ リニューアルのお知らせ" /></p>
    	<div class="tit">
    		<h1>ホームページ リニューアルのお知らせ</h1>
    		<p class="date incon">2018.09.27</p>
    	</div>
    	<div class="section_detail">
    		<p>ホテルコンコルド浜松 ホームページを9月28日にリニューアルいたしました。<span><br></span></p>
<p>より使いやすく、よりわかりやすいホームページとなるよう、全面的にリニューアルしております。<span style="font-size: 0.875em;"> </span></p>
<p>今後も皆様にご利用いただけるサイトとなるよう、更新してまいりますので引き続きよろしくお願い致します。</p>
    	</div>
    </div>


	<!--======================== pager ======================-->
    <div class="pager">
    <ul><li><a href="http://dev182.ultraworks.jp/news/p1.php" class="link_before">PREV</a></li><li><a href="/news/" class="link_page ja">一覧へ戻る</a></li><li><a href="http://dev182.ultraworks.jp/news/post.php" class="link_next">NEXT</a></li></ul>
    </div>
    <!--======================== //pager ======================-->


<!--======================== topic_path =====================================-->
<div class="topic_path_sp">
	<ul>
    	<li class="home"><a href="/">浜松のホテルコンコルド浜松 ホーム</a></li>
        <li><a href="/news/">お知らせ</a></li>

        <li>ホームページ リニューアルのお知らせ</li>

    </ul>
</div>
<!--======================== //topic_path =====================================-->
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
});
</script>

</body>
</html>
