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

<title>バスランチプラン｜宴会プラン｜会議・宴会｜<?=SITE_NAME?></title>


<meta property="og:title" content="バスランチプラン｜宴会プラン｜会議・宴会｜<?=SITE_NAME?>" />

<meta property="og:type" content="website">
<meta property="og:description" content="<?php echo DESCRIPTION ?>">
<meta property="og:url" content="<?php echo CANONICAL ?>">

<meta property="og:image" content="http://dev182.ultraworks.jp/party/plan/assets_c/2018/09/bus-thumb-834xauto-11683.jpg" />
<link rel="amphtml" href="http://dev182.ultraworks.jp/party/plan/amp/post_3.php" />


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
        <h1 class="sawa">バスランチプラン</h1>
    </div>
</div>


<!--======================== topic_path =====================================-->
<div class="topic_path">
	<ul>
    	<li class="home"><a href="/">浜松のホテルコンコルド浜松 ホーム</a></li>
        <li><a href="/party/">会議・宴会</a></li>
    <li><a href="/party/plan/">宴会プラン</a></li>

        <li>バスランチプラン</li>

    </ul>
</div>
<!--======================== //topic_path =====================================-->



	<p class="plan_m"><img src="http://dev182.ultraworks.jp/party/plan/assets_c/2018/09/bus-thumb-800xauto-11683.jpg" alt="バスランチプラン" /></p>
    
    <div class="main_lead plan_lead">

        <div class="plan_detail"><div class="in cf">
        	<div class="mid cf">
            <ul>
                <li><b>- 料金　</b>お一人様 3,240円～</li>
                <li><b>- 期間　</b>2019年3月31日まで</li>
            </ul>
            <ul>
                <li><b>- ご利用人数　</b>15名様～</li>
                <li><b>- ご利用時間　</b>2～3時間</li>
            </ul>
            </div>
        <p class="convbtn"><a href="/party/reserve/">このプランを予約する</a></p>
        </div></div>
    
    </div>
    
<div class="content_inner">

	<div class="plan_content cf">
    	<p><span>浜松城公園の緑豊かなロケーションに恵まれたホテルコンコルド浜松でのランチ休憩。</span><br><span>ホテルならではの細やかなおもてなしで皆様をお迎え致します。</span></p>
<div class="delimiter">
<h3 class="headline">プラン内容</h3>
<h4 class="headline">【料金】</h4>
<p class="mgb10">お一人様 3,240円（税・サービス料込）より承ります。</p>
<h4 class="headline">【内容】</h4>
<ul class="line-list"><li>3,240円コース<br>和食弁当・洋食弁当・洋食ランチのいずれかをお選びいただけます。</li><li>4,320円コース<br>　和食弁当・洋食弁当・洋食ランチ・中華ランチのいずれかをお選びいただけます。</li><li>5,400円コース<br>　浜名湖産うなぎ定食・日本料理会席コース・仏蘭西料理フルコース・中国料理コースのいずれかをお選びいただけます。</li></ul>
<h4 class="headline">【オプション】</h4>
<ul class="line-list mgb20"><li>ご宿泊とセットでご利用いただくことも可能です。お気軽にお問い合わせください。</li></ul>
<p class="mgb10">※各コース15名様より承ります。</p>
</div>        
    </div>

	


	<p class="linkbtn linkbtn_w"><a href="/party/plan/">プラン一覧に戻る</a></p>

</div>


<!--======================== topic_path =====================================-->
<div class="topic_path_sp">
	<ul>
    	<li class="home"><a href="/">浜松のホテルコンコルド浜松 ホーム</a></li>
        <li><a href="/party/">会議・宴会</a></li>
    <li><a href="/party/plan/">宴会プラン</a></li>

        <li>バスランチプラン</li>

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
