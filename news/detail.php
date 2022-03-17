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
<title>タイトルです。｜お知らせ｜<?php echo SITE_NAME ?></title>

<meta property="og:title" content="タイトルです。｜お知らせ｜<?php echo SITE_NAME ?>">
<meta property="og:type" content="website">
<meta property="og:description" content="<?php echo DESCRIPTION ?>">
<meta property="og:url" content="<?php echo CANONICAL ?>">
<meta property="og:image" content="/images/fb_ogp-image.jpg">

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
        <h2 class="sawa">お知らせ</h1>
        <p class="sub incon">NEWS</p>
    </div>
</div>

<div class="content_inner">

	<div class="info_detail">
    	<p class="main"><img src="../images/info/d.jpg" alt=""></p>
    	<div class="tit">
    		<h1>夏メニューをまとめてご紹介6月限定のお料理やドリンクが登場。是非おためしください！</h1>
    	</div>
    	<div class="section_detail">
    		<p>内容が入ります。内容が入ります。内容が入ります。内容が入ります。内容が入ります。内容が入ります。内容が入ります。内容が入ります。内容が入ります。</p>
            <p>内容が入ります。内容が入ります。内容が入ります。内容が入ります。内容が入ります。内容が入ります。内容が入ります。内容が入ります。内容が入ります。</p>
            <p>内容が入ります。内容が入ります。内容が入ります。内容が入ります。内容が入ります。内容が入ります。内容が入ります。内容が入ります。内容が入ります。</p>
    	</div>
    </div>


	<!--======================== pager ======================-->
    <div class="pager">
    <ul><li><a href="#" class="link_before">PREV</a></li><li><a href="/news/" class="link_page ja">一覧へ戻る</a></li><li><a href="#" class="link_next">NEXT</a></li></ul>
    </div>
    <!--======================== //pager ======================-->


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

});
</script>

</body>
</html>
