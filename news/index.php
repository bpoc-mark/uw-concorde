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

<title>お知らせ｜<?php echo SITE_NAME ?></title>


<meta property="og:title" content="お知らせ｜<?=SITE_NAME?>" />

<meta property="og:type" content="website">
<meta property="og:description" content="<?php echo DESCRIPTION ?>">
<meta property="og:url" content="<?php echo CANONICAL ?>">


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

    </ul>
</div>
<!--======================== //topic_path =====================================-->


<div class="content_inner">


	<div class="news_box"><div class="news_inner">

 

    	<div class="box"><a href="http://dev182.ultraworks.jp/news/post.php" class="cf">
        	<p class="date incon">2020.05.22</p>
            <p class="tl">宴会・会議のお引き受けについて</p>
        </a></div>


    	<div class="box"><a href="http://dev182.ultraworks.jp/news/HP.php" class="cf">
        	<p class="date incon">2018.09.27</p>
            <p class="tl">ホームページ リニューアルのお知らせ</p>
        </a></div>


    	<div class="box"><a href="http://dev182.ultraworks.jp/news/p1.php" class="cf">
        	<p class="date incon">2018.08.15</p>
            <p class="tl">電子マネー決済およびモバイル決済でお支払いがさらに便利に！</p>
        </a></div>


    	<div class="box"><a href="http://dev182.ultraworks.jp/news/sakura-concorde.php" class="cf">
        	<p class="date incon">2018.06.12</p>
            <p class="tl">観光品質認証制度サクラクオリティにおいて認定をされました</p>
        </a></div>


    	<div class="box"><a href="http://dev182.ultraworks.jp/news/official-hotel.php" class="cf">
        	<p class="date incon">2018.04.01</p>
            <p class="tl">浜名湖パルパル オフィシャルホテルのお知らせ</p>
        </a></div>


    	<div class="box"><a href="http://dev182.ultraworks.jp/news/hamamatsu-cas-cherry.php" class="cf">
        	<p class="date incon">2018.03.21</p>
            <p class="tl">浜松城公園「さくらまつり」開催中の周辺道路の混雑について</p>
        </a></div>
    
    
        <!--======================== pager ======================-->
    <div class="pager">
        <ul><li><span class="current_page">1</span></li></ul>
    </div>
        <!--======================== //pager ======================-->
    
    </div></div>




<!--======================== topic_path =====================================-->
<div class="topic_path_sp">
	<ul>
    	<li class="home"><a href="/">浜松のホテルコンコルド浜松 ホーム</a></li>
        <li><a href="/news/">お知らせ</a></li>

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
