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

<link href="/css/inquiry.css" media="print" rel="stylesheet">
<link href="/css/inquiry.css" media="screen and (min-width: 801px)" rel="stylesheet">
<link href="/sp/css/inquiry.css" media="only screen and (max-width: 800px)" rel="stylesheet">

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
        <h1 class="sawa">簡単お見積もり･ご相談</h1>
        <p class="cap2">会議でご利用の方</p>
        <p class="sub incon">ESTIMATE</p>
    </div>
    
<!--======================== topic_path =====================================-->
<div class="topic_path">
	<ul>
    	<li class="home"><a href="/">浜松のホテルコンコルド浜松 ホーム</a></li>
        <li><a href="/party/">会議・宴会</a></li>
		<li><a href="/party/estimate/">簡単お見積もり･ご相談</a></li>
        <li>会議でご利用の方</li>
    </ul>
</div>
<!--======================== //topic_path =====================================-->

</div>
    
<div class="content_inner">

	<div class="inq_lead">
    	<p class="pd">この度は ホテルコンコルド浜松の会議・宴会のお見積りありがとうございます。<br>
		内容確認後、担当スタッフよりご連絡を差し上げます。<br><br>
		なお、7日以上経っても返信がない場合は、何らかの状況でメールが届いていない可能性がございますので、<br>その際はお手数ですが再度ご連絡を下さいますようお願い致します。</p>
        
        <p class="btn"><a href="/">トップページへ</a></p>
    </div>



<!--======================== topic_path =====================================-->
<div class="topic_path_sp">
	<ul>
    	<li class="home"><a href="/">浜松のホテルコンコルド浜松 ホーム</a></li>
        <li><a href="/party/">会議・宴会</a></li>
		<li><a href="/party/estimate/">簡単お見積もり･ご相談</a></li>
        <li>会議でご利用の方</li>
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

<script src="https://ajaxzip3.github.io/ajaxzip3.js" charset="UTF-8"></script>

</body>
</html>
