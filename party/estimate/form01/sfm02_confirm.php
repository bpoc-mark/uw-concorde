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

<div class="inq_wrapper">

	<div class="inq_lead">
    	<p class="c">下記フォームを入力すると見積もり金額が表示されます。<br>そのままご相談いただく場合は、「送信内容を確認する」をクリックしてください。</p>
    </div>


	<div class="inq_area inq_area_w"><div class="inner">
    <form method="post" name="sfm-form" id="sfm-form" action>
    
    	<h2 class="def sawa">ご利用内容</h2>


        <div class="box cf">
        	<div class="tit"><p>- ご利用日時 <span class="ERR">※</span></p></div>
            <div class="con"><p><?php echo $sfm_html->year; ?>年<?php echo $sfm_html->month; ?>月<?php echo $sfm_html->day; ?>日&nbsp;<?php echo $sfm_html->hour_a; ?>時から<?php echo $sfm_html->hour_b; ?>時まで</p></div>
        </div>
        
        <div class="box cf">
        	<div class="tit"><p>- 会議スタイル</p></div>
            <div class="con cf">
            	<p><?php echo $sfm_html->style; ?></p>
            </div>
        </div>
        
        <div class="box cf">
        	<div class="tit"><p>- ご利用人数 <span class="ERR">※</span></p></div>
            <div class="con"><p><?php echo $sfm_html->people; ?></p></div>
        </div>
       
        <div class="box cf">
        	<div class="tit"><p>- 会場使用料</p></div>
            <div class="con cf">
            	<p><?php echo $sfm_html->kaijyo; ?></p>
            </div>
        </div>
        
        
        <div class="box cf">
        	<div class="tit"><p>- オプション</p></div>
            <div class="con cf">
            	<p><?php echo $sfm_html->option; ?></p>
            </div>
        </div>
        
        <div class="box cf">
        	<div class="tit"><p>- オプション料金</p></div>
            <div class="con cf">
            	<p><?php echo $sfm_html->op; ?></p>
            </div>
        </div>
        
        
        <div class="pricebox"><div class="in cf">
        	<p class="tt sawa">お見積り金額</p>
        	<p class="p1 sawa"><span><?php echo $sfm_html->total_v; ?></span>円</p>
        </div></div>
    
    </div></div>
    <div class="inq_area"><div class="inner">
    
        <h2 class="def sawa">お客様基本情報</h2>
        
        <div class="box cf">
        	<div class="tit"><p>- 代表者氏名 <span class="ERR">※</span></p></div>
            <div class="con"><p><?php echo $sfm_html->name; ?></p></div>
        </div>
        
        <div class="box cf">
        	<div class="tit"><p>- フリガナ <span class="ERR">※</span></p></div>
            <div class="con"><p><?php echo $sfm_html->kana; ?></p></div>
        </div>
        
        <div class="box cf">
        	<div class="tit"><p>- 団体名</p></div>
            <div class="con"><p><?php echo $sfm_html->group; ?></p></div>
        </div>
        
        <div class="box cf">
        	<div class="tit"><p>- メールアドレス <span class="ERR">※</span></p></div>
            <div class="con"><p><?php echo $sfm_html->email; ?></p></div>
        </div>
        
        <div class="box cf">
        	<div class="tit"><p>- ご住所</p></div>
            <div class="con">
            <p>〒 <?php echo $sfm_html->zip; ?></p><p><?php echo $sfm_html->add; ?></p></div>
        </div>
        
        <div class="box cf">
        	<div class="tit"><p>- 電話番号</p></div>
            <div class="con"><p><?php echo $sfm_html->tel; ?></p></div>
        </div>
        
        
        <div class="box cf">
        	<div class="tit"><p>- ご質問、ご要望</p></div>
            <div class="con"><p><?php echo $sfm_html->other; ?></p></div>
        </div>
        

        
        
        <div class="ssl">
        	<p>ホテルコンコルド浜松では、SSL暗号化技術採用により、お客様の情報を最高水準のセキュリティで保護しています。お客様の個人情報は、適切に管理し第三者に開示・提供することは一切ありません。<br>
<a href="/kiyaku/">&raquo; 当サイトのセキュリティーおよび個人情報の保護について</a></p>
        </div>
        
        
        <div class="submit_area">
			<?php echo $sfm_submit; ?>
		</div><!-- submit_area -->
                    
    </form>
    </div></div>



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
