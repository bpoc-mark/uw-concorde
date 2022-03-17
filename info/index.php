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
<title>館内案内｜<?php echo SITE_NAME ?></title>

<meta property="og:title" content="館内案内｜<?php echo SITE_NAME ?>">
<meta property="og:type" content="website">
<meta property="og:description" content="<?php echo DESCRIPTION ?>">
<meta property="og:url" content="<?php echo CANONICAL ?>">
<meta property="og:image" content="/images/fb_ogp-image.jpg">

<?php include($_SERVER['DOCUMENT_ROOT']."/inc/header_include.php");?>

<link href="/css/guide.css" media="print" rel="stylesheet">
<link href="/css/guide.css" media="screen and (min-width: 801px)" rel="stylesheet">
<link href="/sp/css/guide.css" media="only screen and (max-width: 800px)" rel="stylesheet">

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
        <h1 class="sawa">館内案内</h1>
        <p class="sub incon">FLOOR GUIDE</p>
    </div>
	<!--======================== topic_path =====================================-->
<div class="topic_path">
	<ul>
    	<li class="home"><a href="/">浜松のホテルコンコルド浜松 ホーム</a></li>
		<li>館内案内</li>
    </ul>
</div>
<!--======================== //topic_path =====================================-->
    <div class="bg bg_top bg_guide01"></div>
</div>

<div class="content_inner">

	<div class="anchor cf">
		<ul>
        	<li class="a01"><a href="javascript:void(0)"><span>レストラン</span></a></li>
            <li class="a02"><a href="javascript:void(0)"><span>宴会場</span></a></li>
            <li class="a03"><a href="javascript:void(0)"><span>ウェディング</span></a></li>
            <li class="a04"><a href="javascript:void(0)"><span>その他施設</span></a></li>
            <li class="a05"><a href="javascript:void(0)"><span>駐車場</span></a></li>
        </ul>
	</div>
	<div class="g_box01 cf alink"><a class="anc" id="c01"></a>
        <h2 class="def_02 sawa s_bg">レストラン</h2>
	 <!-- 01 -->
    	<div class="box01_02">
		<p class="g_img"><img src="../images/guide/ph01.jpg" alt="シャンゼリア" class="pc"><img src="../sp/images/guide/ph01.jpg" alt="シャンゼリア" class="sp"></p>
		<div class="sb_02">
        	<p class="stair sawa">- 1<span>F</span> -</p>
            <p class="sub sawa g_cen">和洋中・ビュッフェ・ダイニング</p>
            <h4 class="sawa">シャンゼリゼ</h4>
            <p class="sub g_s">和洋中の旬な食材を使用したお料理の数々とホテルパティシエスイーツが楽しめる人気のビュッフェレストラン</p>

			<p class="morebtn"><a href="/restaurant/champs/" class="incon">MORE</a></p>
        </div>
	   </div>
    <!-- 02 -->
        <!-- <div class="box01_02">
		<p class="g_img"><img src="../images/guide/ph02.jpg" alt="bistro コンコルド" class="pc"><img src="../sp/images/guide/ph02.jpg" alt="コンコルド亭" class="sp"></p>
		<div class="sb_02">
        	<p class="stair sawa">- 1<span>F</span> -</p>
            <p class="sub sawa g_cen">洋食</p>
            <h4 class="sawa">bistro コンコルド</h4>
            <p class="sub g_s">【ディナータイム限定】コンコルド浜松特製デミグラスソースを使用したハンバーグなど、ホテルメイドのお料理をお楽しみいただけるレストラン　</p>

			<p class="morebtn"><a href="/restaurant/concorde/" class="incon">MORE</a></p>
        </div>
	   </div> -->
	<!-- 03 -->
		<div class="box01_02 mb">
		<p class="g_img"><img src="../images/guide/ph03.jpg" alt="堂満" class="pc"><img src="../sp/images/guide/ph03.jpg" alt="堂満" class="sp"></p>
		<div class="sb_02">
        	<p class="stair sawa">- 1<span>F</span> -</p>
            <p class="sub sawa g_cen">日本料理</p>
            <h4 class="sawa">堂満</h4>
            <p class="sub g_s">旬の食材にこだわった四季折々の料理でおもてなし</p>

			<p class="morebtn"><a href="/restaurant/dohman/" class="incon">MORE</a></p>
        </div>
	   </div>
	<!-- 04 -->
		<div class="box01_02 mb">
		<p class="g_img"><img src="../images/guide/ph04.jpg" alt="ボンジュール" class="pc"><img src="../sp/images/guide/ph04.jpg" alt="ボンジュール" class="sp"></p>
		<div class="sb_02">
        	<p class="stair sawa">- 1<span>F</span> -</p>
            <p class="sub sawa g_cen">セルフティーラウンジ</p>
            <h4 class="sawa">ボンジュール</h4>
            <p class="sub g_s">季節にあわせたホテルメイドスイーツと共に、優雅なひとときを</p>

			<p class="morebtn"><a href="/restaurant/bonjour/" class="incon">MORE</a></p>
        </div>
	   </div>
	<!-- 05 -->
    <!--
		<div class="box01_02 mb">
		<p class="g_img"><img src="../images/guide/ph05.jpg" alt="王府井" class="pc"><img src="../sp/images/guide/ph05.jpg" alt="王府井" class="sp"></p>
		<div class="sb_02">
        	<p class="stair sawa">- 18<span>F</span> -</p>
            <p class="sub sawa g_cen">中国料理</p>
            <h4 class="sawa">王府井</h4>
            <p class="sub g_s">最上階18階からのロケーションを楽しみながら、広東料理を中心とする中国料理は絶品。</p>

			<p class="morebtn"><a href="/restaurant/wongfu/" class="incon">MORE</a></p>
        </div>
	   </div>
   -->
		<!-- 06 -->
		<!--<div class="box01_02">
		</div>-->
    </div><!-- g_box01 cf -->

	<div class="g_box01 cf alink"><a class="anc" id="c02"></a>
        <h2 class="def_02 sawa s_bg">宴会場</h2>
	 <!-- 01 -->
    	<div class="box01_02">
		<p class="g_img"><img src="../images/guide/ph06.jpg" alt="宴会場" class="pc"><img src="../sp/images/guide/ph06.jpg" alt="宴会場" class="sp"></p>
		<div class="sb_02 space">
        	<p class="stair sawa">- 2<span>F</span>･3<span>F</span> -</p>
            <h4 class="sawa t">宴会場</h4>
            <p class="sub g_s">お客様の様々なニーズに対応できるよう、最大1,000名様収容の大宴会・会議場を始め、大小19の宴会・会議場をご用意いたしております。</p>

			<p class="morebtn"><a href="/party#enkai" class="incon">MORE</a></p>
        </div>
	   </div>
    <!-- 02 -->
    <div class="box01_02 mb">
    	<p class="g_img">
    		<img src="../images/guide/ph07.jpg" alt="小宴会場" class="pc">
    		<img src="../sp/images/guide/ph07.jpg" alt="小宴会場" class="sp">
    	</p>
			<div class="sb_02 space">
        <p class="stair sawa">- 3<span>F</span>･5<span>F</span> -</p>
        <h4 class="sawa t">小宴会場</h4>
        <p class="sub g_s">少人数の会議にまた控室としてご使用いただけます。</p>
				<p class="morebtn"><a href="/party/hall/hall04.php" class="incon">MORE</a></p>
      </div>
	  </div>
	<!-- 03 -->
		<div class="box01_02 mb">
			<p class="g_img">
				<img src="../images/guide/ph08.jpg" alt="スカイバンケット「エトワール」" class="pc">
				<img src="../sp/images/guide/ph08.jpg" alt="スカイバンケット" class="sp">
			</p>
			<div class="sb_02 space">
      	<p class="stair sawa">- 18<span>F</span> -</p>
        <h4 class="sawa t">スカイバンケット<br>エトワール</h4>
        <p class="sub g_s">ホテル最上階ならではの景色も楽しめる会場。披露宴・二次会・宴会などご希望に合わせてご利用いただけます。</p>
				<p class="morebtn"><a href="/party/hall/hall05.php" class="incon">MORE</a></p>
      </div>
	  </div>
	  <!-- 04 -->
		<!--<div class="box01_02 mb">
			<p class="g_img">
				<img src="../images/guide/ph17.jpg" alt="スカイバンケット「王府井」" class="pc">
				<img src="../sp/images/guide/ph17.jpg" alt="スカイバンケット" class="sp">
			</p>
			<div class="sb_02 space">
      	<p class="stair sawa">- 18<span>F</span> -</p>
        <h4 class="sawa t">スカイバンケット<br>王府井</h4>
        <p class="sub g_s">お仲間との宴会場としてご利用いただけます。</p>
				<p class="morebtn"><a href="/party/hall/hall05.php#hall05-02" class="incon">MORE</a></p>
      </div>
	  </div>-->

       <!-- 06 -->
		<div class="box01_02 bnone">
		</div>

    </div><!-- g_box01 cf -->

	<div class="g_box01 cf alink"><a class="anc" id="c03"></a>
        <h2 class="def_02 sawa s_bg">ウェディング</h2>
	 <!-- 01 -->
    	<div class="box01_02 mb">
		<p class="g_img"><img src="../images/guide/ph09.jpg" alt="チャペル(サンプリエール教会)" class="pc"><img src="../sp/images/guide/ph09.jpg" alt="チャペル(サンプリエール教会)" class="sp"></p>
		<div class="sb_02">
        	<p class="stair sawa">- 1<span>F</span> -</p>
            <h4 class="sawa t b">チャペル(サンプリエール教会)</h4>
            <p class="sub g_s">浜松市内ホテル唯一全天候対応独立型「緑と風のチャペル」でドラマティックな結婚式を</p>

			<p class="morebtn"><a href="https://concordewedding.business.site/" target="_blank" class="incon">MORE</a></p>
        </div>
	   </div>
    <!-- 02 -->
        <div class="box01_02 mb">
		<p class="g_img"><img src="../images/guide/ph10.jpg" alt="神殿(寿殿)" class="pc"><img src="../sp/images/guide/ph10.jpg" alt="神殿(寿殿)" class="sp"></p>
		<div class="sb_02">
        	<p class="stair sawa">- 1<span>F</span> -</p>
            <h4 class="sawa t b">神殿(寿殿)</h4>
            <p class="sub g_s">伊勢神宮の御祭神「天照皇大神」を祀り、格式高い和の様式美を今に伝える由緒正しき神殿「寿殿」</p>

			<p class="morebtn"><a href="https://concordewedding.business.site/" target="_blank" class="incon">MORE</a></p>
        </div>
	   </div>
    </div><!-- g_box01 cf -->

	<div class="g_box01 cf alink"><a class="anc" id="c04"></a>
        <h2 class="def_02 sawa s_bg">その他施設</h2>
	 <!-- 01 -->
    	<div class="box01_02">
		<p class="g_img"><img src="../images/guide/ph11.jpg" alt="ギャラリー" class="pc"><img src="../sp/images/guide/ph11.jpg" alt="ギャラリー" class="sp"></p>
		<div class="sb_02">
        	<p class="stair sawa">- 1<span>F</span> -</p>
            <h4 class="sawa t">ギャラリー</h4>
            <p class="sub g_s">地元の芸術家の皆様による様々な絵画や写真、いけばな等の芸術作品をどうぞお楽しみください。</p>

        </div>
	   </div>
    <!-- 02 -->
        <!-- <div class="box01_02">
		<p class="g_img"><img src="../images/guide/ph12.jpg" alt="美容室カルディア" class="pc"><img src="../sp/images/guide/ph12.jpg" alt="美容室カルディア" class="sp"></p>
		<div class="sb_02">
        	<p class="stair sawa">- 3<span>F</span> -</p>
            <h4 class="sawa t">美容室カルディア</h4>
            <p class="sub g_s">ブライダルヘアメイクをはじめ、一般美容・着付にも幅広くご利用いただけます。</p>
        	<p class="stair g_int">-&nbsp;営業時間</p>
			<p class="sub g_s">&emsp;10:00～19:00<br>&emsp;（月曜・火曜定休・要予約）</p>

        </div>
	   </div> -->
	<!-- 03 -->
      <!--  <div class="box01_02">
		<p class="g_img"><img src="../images/guide/ph13.jpg" alt="スタジオテイク" class="pc"><img src="../sp/images/guide/ph13.jpg" alt="スタジオテイク" class="sp"></p>
		<div class="sb_02">
        	<p class="stair sawa">- 3<span>F</span> -</p>
            <h4 class="sawa t">スタジオテイク</h4>
            <p class="sub g_s">成人式・七五三・家族写真などの各種記念日や結婚式前撮り写真、式当日スナップ写真撮影にご利用くださいませ。</p>
			<p class="stair g_int">-&nbsp;営業時間</p>
			<p class="sub g_ss">&emsp;10:00～19:00（完全予約制）<br>
				&emsp;定休日／毎週水曜日<br>
				&emsp;&emsp;&emsp;&emsp;&emsp;年末年始 12月30日～1月3日<br>
                &emsp;&emsp;&emsp;&emsp;&emsp;※1月2日、3日は応相談</p>
        </div>
	   </div>-->
	<!-- 04 -->
        <div class="box01_02 mb">
		<p class="g_img"><img src="../images/guide/ph14.jpg" alt="コインランドリー" class="pc"><img src="../sp/images/guide/ph14.jpg" alt="コインランドリー" class="sp"></p>
		<div class="sb_02">
        	<p class="stair sawa">- 4<span>F</span> -</p>
            <h4 class="sawa t">コインランドリー</h4>
            <p class="sub g_s mb">洗濯機・乾燥機のコインランドリーをご用意。長期滞在の際、ご利用くださいませ。<br>その他に、食品・アルコールなどの自動販売機や製氷機、電子レンジもご用意しております。</p>

        </div>
	   </div>
		<!-- 05 -->
			<div class="box01_02 mb">
		<p class="g_img"><img src="../images/guide/ph18.jpg" alt="コミックコーナー" class="pc"><img src="../sp/images/guide/ph18.jpg" alt="コミックコーナー" class="sp"></p>
		<div class="sb_02">
        	<p class="stair sawa">- 18<span>F</span> -</p>
            <h4 class="sawa t">コミックコーナー</h4>
            <p class="sub g_s mb">宿泊者専用のコミックコーナーをご用意。<br>18階からの大パノラマもご覧いただけます。お仕事や勉強場所としてもご利用くださいませ。</p>

        </div>
	   </div>
		<!-- 06 -->
		   <!--<div class="box01_02">
			</div>-->
    </div><!-- g_box01 cf -->

	<div class="g_box01 cf alink"><a class="anc" id="c05"></a>
        <h2 class="def_02 sawa s_bg">駐車場</h2>
	 <!-- 01 -->
    	<div class="box01_03">
		<p><img src="../images/guide/ph15.jpg" alt="駐車場" class="pc"></p>
	  <div class="main_img_detail s sp">
    <div class="bg">
    	<ul class="slides">
        	<li class="single01"></li>
            <li class="single02"></li>
        </ul>
    </div>
</div>
		<div class="sb_03">
			<ul class="">
                      <li class="sub g_s">ホテル併設の立体駐車場は、乗用車200台、大型車(バス・トラック)6台駐車可能です。無料でご使用いただけます。</li>
                      <li class="morebtn"><a href="/info/access.php#parking" class="incon">MORE</a></li>
			</ul>
        </div>
	   </div>
    </div><!-- g_box01 cf -->


	<h2 class="def sawa">ホテル案内</h2>

	<div class="guide_nav cf">
		<ul>
        	<li><a href="/info/" class="here"><span>館内案内</span></a></li>
            <li><a href="/info/access.php"><span>交通案内</span></a></li>
            <li><a href="/info/tour.php"><span>周辺案内</span></a></li>
        </ul>
	</div>


	<!--======================== topic_path =====================================-->
<div class="topic_path_sp">
	<ul>
    	<li class="home"><a href="/">浜松のホテルコンコルド浜松 ホーム</a></li>
		<li>館内案内</li>
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
<script src="/js/fs/jquery.flexslider-min.js" type="text/javascript"></script>
<link href="/js/fs/flexslider.css" media="all" rel="stylesheet">
<script type="text/javascript">
$(function($) {
	var w = $(window).width();

	$('.main_img_detail .bg').flexslider({
			animation: "slide",
			animationLoop: true,
			slideshow: true,
			slideshowSpeed: 4000,
			pauseOnAction: false,
			directionNav: false
	});

});
</script>
<script type="text/javascript">
$(function($) {
	var w = $(window).width();

	$('.parking').flexslider({
			animation: "slide",
			animationLoop: true,
			slideshow: true,
			slideshowSpeed: 4000,
			pauseOnAction: false,
			directionNav: false
	});
	$('.a01 a').click(function(){
	$('#c01').animatescroll({scrollSpeed:1000,easing:'easeOutQuart'});
	});

	$('.a02 a').click(function(){
	$('#c02').animatescroll({scrollSpeed:1000,easing:'easeOutQuart'});
	});

	$('.a03 a').click(function(){
	$('#c03').animatescroll({scrollSpeed:1000,easing:'easeOutQuart'});
	});

	$('.a04 a').click(function(){
	$('#c04').animatescroll({scrollSpeed:1000,easing:'easeOutQuart'});
	});
	$('.a05 a').click(function(){
	$('#c05').animatescroll({scrollSpeed:1000,easing:'easeOutQuart'});
	});


});
</script>
</body>
</html>
