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
<title>タイトルです。｜宴会プラン｜会議・宴会｜<?php echo SITE_NAME ?></title>

<meta property="og:title" content="タイトルです。｜宴会プラン｜会議・宴会｜<?php echo SITE_NAME ?>">
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
	<div class="tit">
    	<p class="cap">&nbsp;</p>
        <h1 class="sawa">タイトルが入ります。</h1>
    </div>
</div>


	<p class="plan_m"><img src="/images/party/plan/d2.jpg" alt="タイトルが入ります。"></p>
    
    <div class="main_lead plan_lead">

        <div class="plan_detail"><div class="in cf">
        	<div class="mid cf">
            <ul>
                <li><b>- 料金　</b>お一人様　5,000円</li>
                <li><b>- 期間　</b>2018/6/1〜2018/8/31</li>
            </ul>
            <ul>
                <li><b>- ご利用人数　</b>20名様〜</li>
                <li><b>- ご利用時間　</b>2時間 または 2時間30分</li>
            </ul>
            </div>
            <p class="convbtn"><a href="#" target="_blank">このプランを予約する</a></p>
        </div></div>
    
    </div>
    
<div class="content_inner">

	<div class="plan_content cf">
    	<p>内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容</p>
    	<p>内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容</p>
        
    </div>

	
	<p class="all_btn all_btn_w"><a href="#" target="_blank">チラシダウンロード</a></p>

	<p class="linkbtn linkbtn_w"><a href="/party/plan/" target="_blank">プラン一覧に戻る</a></p>
    
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
$(function(){
	$('.plan_content img').each(function(){
		$(this).removeAttr("height");
		if( $(this).attr('width') > 290 || $(this).width() - 0 > 290 ){
			$(this).addClass('w');
		}
	});
	
});
</script>
</body>
</html>
