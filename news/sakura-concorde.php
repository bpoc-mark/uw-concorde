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

<title>観光品質認証制度サクラクオリティにおいて認定をされました｜お知らせ｜<?=SITE_NAME?></title>


<meta property="og:title" content="観光品質認証制度サクラクオリティにおいて認定をされました｜お知らせ｜<?=SITE_NAME?>" />

<meta property="og:type" content="website">
<meta property="og:description" content="<?php echo DESCRIPTION ?>">
<meta property="og:url" content="<?php echo CANONICAL ?>">

<meta property="og:image" content="" />
<link rel="amphtml" href="http://dev182.ultraworks.jp/news/amp/sakura_concorde.php" />


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

        <li>観光品質認証制度サクラクオリティにおいて認定をされました</li>

    </ul>
</div>
<!--======================== //topic_path =====================================-->


<div class="content_inner">

	<div class="info_detail">
    	<p class="main"></p>
    	<div class="tit">
    		<h1>観光品質認証制度サクラクオリティにおいて認定をされました</h1>
    		<p class="date incon">2018.06.12</p>
    	</div>
    	<div class="section_detail">
    		<div><strong>サクラクオリティとは...</strong></div>
<div>ホテルや旅館等の宿泊施設を中心とした観光品質認証制度の名称です。<br class="pc">世界中の旅行者に、質の高い日本の観光サービスに関する情報提供を行い、</div>
<div>安心で快適な旅行を楽しんでいただくために、申請のあった宿泊施設などの</div>
<div>観光サービスの品質を第三者が評価し、その品質の高さを認証する仕組みです。</div>
<div> </div>
<div>これからも認定され続けるホテルとなれるよう頑張ってまいります。<br>よろしくお願い申しあげます。</div>
<div></div>
<div><a href="http://www.undiscovered-japan.com/?p=5360">サクラクオリティ　ホテルコンコルド浜松ページはこちら</a></div>
<div></div>
<div>SAKURA QUALITY観光品質認証は、平成３０年４月１日前に行われたものであるため、一部の要件等に関する審査及び手続が省略されています。</div>
<div><img width="724" height="1024" class="alignnone size-large wp-image-7070" alt="" src="http://concorde.co.jp/wp/wp-content/uploads/2018/06/3896cc5b0e9958d775036b68980fc00a-724x1024.jpg"></div>
    	</div>
    </div>


	<!--======================== pager ======================-->
    <div class="pager">
    <ul><li><a href="http://dev182.ultraworks.jp/news/official-hotel.php" class="link_before">PREV</a></li><li><a href="/news/" class="link_page ja">一覧へ戻る</a></li><li><a href="http://dev182.ultraworks.jp/news/p1.php" class="link_next">NEXT</a></li></ul>
    </div>
    <!--======================== //pager ======================-->


<!--======================== topic_path =====================================-->
<div class="topic_path_sp">
	<ul>
    	<li class="home"><a href="/">浜松のホテルコンコルド浜松 ホーム</a></li>
        <li><a href="/news/">お知らせ</a></li>

        <li>観光品質認証制度サクラクオリティにおいて認定をされました</li>

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
