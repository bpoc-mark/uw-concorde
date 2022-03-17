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
<title>簡単お見積もり･ご相談｜会議・宴会｜<?php echo SITE_NAME ?></title>

<meta property="og:title" content="簡単お見積もり･ご相談｜会議・宴会｜<?php echo SITE_NAME ?>">
<meta property="og:type" content="website">
<meta property="og:description" content="<?php echo DESCRIPTION ?>">
<meta property="og:url" content="<?php echo CANONICAL ?>">
<meta property="og:image" content="/images/fb_ogp-image.jpg">

<?php include($_SERVER['DOCUMENT_ROOT']."/inc/header_include.php");?>

<link href="/css/party.css" media="print" rel="stylesheet">
<link href="/css/party.css" media="screen and (min-width: 801px)" rel="stylesheet">
<link href="/sp/css/party.css" media="only screen and (max-width: 800px)" rel="stylesheet">

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
	<div class="tit tit_l">
    	<p class="cap">&nbsp;</p>
        <h1 class="sawa">簡単お見積もり･ご相談</h1>
        <p class="sub incon">ESTIMATE</p>
    </div>
</div>
<!--======================== topic_path =====================================-->
<div class="topic_path">
	<ul>
    	<li class="home"><a href="/">浜松のホテルコンコルド浜松 ホーム</a></li>
        <li><a href="/party/">会議・宴会</a></li>
		<li>簡単お見積もり･ご相談</li>

    </ul>
</div>
<!--======================== //topic_path =====================================-->
   
<div class="content_inner">

	<div class="estbox cf">
		<p class="txt">会議・宴会の費用を簡単に算出することができます。<br>※お見積もり金額は概算費用です。</p>

		<div class="bn1">
        	<p><a href="form01/">会議で<br class="sp">ご利用の方</a></p>
            <p class="t">※お食事の用意が不要の場合</p>
        </div>
        
        <div class="bn2">
        	<p><a href="form02/">宴会で<br class="sp">ご利用の方</a></p>
        </div>
	</div>


	<p class="linkbtn estbtn"><a href="/party/">会議･宴会TOPへ</a></p>

<!--======================== topic_path =====================================-->
<div class="topic_path_sp">
	<ul>
    	<li class="home"><a href="/">浜松のホテルコンコルド浜松 ホーム</a></li>
        <li><a href="/party/">会議・宴会</a></li>
		<li>簡単お見積もり･ご相談</li>

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

</body>
</html>
