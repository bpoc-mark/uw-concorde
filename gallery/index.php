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
<title>ギャラリー｜<?php echo SITE_NAME ?></title>

<meta property="og:title" content="ギャラリー｜<?php echo SITE_NAME ?>">
<meta property="og:type" content="website">
<meta property="og:description" content="<?php echo DESCRIPTION ?>">
<meta property="og:url" content="<?php echo CANONICAL ?>">
<meta property="og:image" content="/images/fb_ogp-image.jpg">

<?php include($_SERVER['DOCUMENT_ROOT']."/inc/header_include.php");?>

<link href="/css/gallery.css" media="print" rel="stylesheet">
<link href="/css/gallery.css" media="screen and (min-width: 801px)" rel="stylesheet">
<link href="/sp/css/gallery.css" media="only screen and (max-width: 800px)" rel="stylesheet">

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
        <h1 class="sawa">ギャラリー</h1>
        <p class="sub incon">GALLERY</p>
    </div>
    
<!--======================== topic_path =====================================-->
<div class="topic_path">
	<ul>
    	<li class="home"><a href="/">浜松のホテルコンコルド浜松 ホーム</a></li>
        <li>ギャラリー</li>

    </ul>
</div>
<!--======================== //topic_path =====================================-->
</div>

<div class="content_inner">

    <div class="s_menu_box cf">

	<?php include($_SERVER['DOCUMENT_ROOT']."/gallery/all.php");?>
                
    </div>

<!--======================== topic_path =====================================-->
<div class="topic_path_sp">
	<ul>
    	<li class="home"><a href="/">浜松のホテルコンコルド浜松 ホーム</a></li>
        <li>ギャラリー</li>

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
<script src="/js/lb/lightcase.js" type="text/javascript"></script>
<link href="/js/lb/lightcase.css" media="all" rel="stylesheet">

<script src="/js/ps/jquery.photoswipe.js" type="text/javascript"></script>
<link href="/js/ps/photoswipe.css" media="all" rel="stylesheet">

<script type="text/javascript">
$(window).load(function(){

var w = $(window).width();


if( w > 800 ){
	$('a[data-rel^=lightcase]').lightcase();
} else {
	$('a[data-rel^=lightcase]').photoSwipe();
}

$('.box_s .share').click(function(){
	$(this).next('.sns').fadeIn();
});

$('.sns .close').click(function(){
	$(this).parent().fadeOut();
});

});
</script>

</body>
</html>
