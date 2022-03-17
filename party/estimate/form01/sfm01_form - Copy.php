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
	<div class="tit">
    	
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
            <div class="con">
            <select name="year_s" class="s">
<option value="" selected>----</option>
<option value="2018">2018</option>
<option value="2019">2019</option>
</select>年
<select name="month_s" class="s">
<option value="" selected>--</option>
<option value="01">01</option>
<option value="02">02</option>
<option value="03">03</option>
<option value="04">04</option>
<option value="05">05</option>
<option value="06">06</option>
<option value="07">07</option>
<option value="08">08</option>
<option value="09">09</option>
<option value="10">10</option>
<option value="11">11</option>
<option value="12">12</option>
</select>月
<select name="day_s" class="s">
<option value="" selected>--</option>
<option value="01">01</option>
<option value="02">02</option>
<option value="03">03</option>
<option value="04">04</option>
<option value="05">05</option>
<option value="06">06</option>
<option value="07">07</option>
<option value="08">08</option>
<option value="09">09</option>
<option value="10">10</option>
<option value="11">11</option>
<option value="12">12</option>
<option value="13">13</option>
<option value="14">14</option>
<option value="15">15</option>
<option value="16">16</option>
<option value="17">17</option>
<option value="18">18</option>
<option value="19">19</option>
<option value="20">20</option>
<option value="21">21</option>
<option value="22">22</option>
<option value="23">23</option>
<option value="24">24</option>
<option value="25">25</option>
<option value="26">26</option>
<option value="27">27</option>
<option value="28">28</option>
<option value="29">29</option>
<option value="30">30</option>
<option value="31">31</option>
</select>日&nbsp;<br>
<select name="hour_a_s" class="s">
<option value="" selected>--</option>
<option value="10">10</option>
<option value="11">11</option>
<option value="12">12</option>
<option value="13">13</option>
<option value="14">14</option>
<option value="15">15</option>
<option value="16">16</option>
<option value="17">17</option>
<option value="18">18</option>
<option value="19">19</option>
<option value="20">20</option>
<option value="21">21</option>
</select>時から
<select name="hour_b_s" class="s">
<option value="" selected>--</option>
<option value="11">11</option>
<option value="12">12</option>
<option value="13">13</option>
<option value="14">14</option>
<option value="15">15</option>
<option value="16">16</option>
<option value="17">17</option>
<option value="18">18</option>
<option value="19">19</option>
<option value="20">20</option>
<option value="21">21</option>
<option value="22">22</option>
</select>時まで
            </div>
        </div>
        
        <div class="box cf">
        	<div class="tit"><p>- 会議スタイル <span class="ERR">※</span></p></div>
            <div class="con">
            	<ul>
                	<li><input type="radio" name="style" value="スクール" id="s1"><label for="s1">スクール</label></li>
                    <li><input type="radio" name="style" value="シアター" id="s2"><label for="s2">シアター</label></li>
                    <li><input type="radio" name="style" value="コの字、ロの字" id="s3"><label for="s3">コの字、ロの字</label></li>
            	</ul>
            </div>
        </div>
        
        <div class="box cf">
        	<div class="tit"><p>- ご利用人数 <span class="ERR">※</span></p></div>
            <div class="con">
            <select name="people">
                <option value="10">10</option>
                <option value="20">20</option>
                <option value="30">30</option>
                <option value="40">40</option>
                <option value="50">50</option>
                <option value="60" class="s3">60</option>
                <option value="70" class="s3">70</option>
                <option value="80" class="s3">80</option>
                <option value="90" class="s3">90</option>
                <option value="100" class="s3">100</option>
                <option value="110" class="s3">110</option>
                <option value="120" class="s3">120</option>
                <option value="130" class="s3">130</option>
                <option value="140" class="s3">140</option>
                <option value="150" class="s3">150</option>
                <option value="160" class="s3">160</option>
                <option value="170" class="s3">170</option>
                <option value="180" class="s3">180</option>
                <option value="190" class="s3">190</option>
                <option value="200" class="s3">200</option>
                <option value="210" class="s3">210</option>
                <option value="220" class="s3">220</option>
                <option value="230" class="s3">230</option>
                <option value="240" class="s3">240</option>
                <option value="250" class="s3">250</option>
                <option value="260" class="s3">260</option>
                <option value="270" class="s3">270</option>
                <option value="280" class="s3">280</option>
                <option value="290" class="s3">290</option>
                <option value="300" class="s3">300</option>
                <option value="310" class="s3">310</option>
                <option value="320" class="s3">320</option>
                <option value="330" class="s3">330</option>
                <option value="340" class="s3">340</option>
                <option value="350" class="s3">350</option>
                <option value="360" class="s3">360</option>
                <option value="370" class="s3">370</option>
                <option value="380" class="s3">380</option>
                <option value="390" class="s3">390</option>
                <option value="400" class="s3">400</option>
                <option value="410" class="s3">410</option>
                <option value="420" class="s3">420</option>
                <option value="430" class="s3">430</option>
                <option value="440" class="s3">440</option>
                <option value="450" class="s3">450</option>
                <option value="460" class="s3">460</option>
                <option value="470" class="s3">470</option>
                <option value="480" class="s3">480</option>
                <option value="490" class="s3">490</option>
                <option value="500" class="s3">500</option>
                <option value="510" class="s3">510</option>
                <option value="520" class="s3">520</option>
                <option value="530" class="s3">530</option>
                <option value="540" class="s3">540</option>
                <option value="550" class="s3">550</option>
                <option value="560" class="s3">560</option>
                <option value="570" class="s3">570</option>
                <option value="580" class="s3">580</option>
                <option value="590" class="s3">590</option>
                <option value="600" class="s3">600</option>
                <option value="610" class="s3 s1">610</option>
                <option value="620" class="s3 s1">620</option>
                <option value="630" class="s3 s1">630</option>
                <option value="640" class="s3 s1">640</option>
                <option value="650" class="s3 s1">650</option>
                <option value="660" class="s3 s1">660</option>
                <option value="670" class="s3 s1">670</option>
                <option value="680" class="s3 s1">680</option>
                <option value="690" class="s3 s1">690</option>
                <option value="700" class="s3 s1">700</option>
                <option value="710" class="s3 s1">710</option>
                <option value="720" class="s3 s1">720</option>
                <option value="730" class="s3 s1">730</option>
                <option value="740" class="s3 s1">740</option>
                <option value="750" class="s3 s1">750</option>
                <option value="760" class="s3 s1">760</option>
                <option value="770" class="s3 s1">770</option>
                <option value="780" class="s3 s1">780</option>
                <option value="790" class="s3 s1">790</option>
                <option value="800" class="s3 s1">800</option>
            </select>
            </div>
        </div>
       
        
        <div class="box box_long cf">
        	<div class="tit"><p>- 会議スタイル</p></div>
            <div class="con cf">
            	<div class="sbox">
                    <p class="t">- スクール</p>
                    <ul>
                        <li><input type="radio" name="style" value="スクール10～30名" id="s1" rel="24000"><label for="s1"><span class="t">10～30名</span><span class="c">\24,000</span></label></li>
                        <li><input type="radio" name="style" value="スクール31～80名" id="s2" rel="59000"><label for="s2"><span class="t">31～80名</span><span class="c">\59,000</span></label></li>
                        <li><input type="radio" name="style" value="スクール81～180名" id="s3" rel="95000"><label for="s3"><span class="t">81～180名</span><span class="c">\95,000</span></label></li>
                        <li><input type="radio" name="style" value="スクール181～270名" id="s4" rel="172000"><label for="s4"><span class="t">181～270名</span><span class="c">\172,000</span></label></li>
                        <li><input type="radio" name="style" value="スクール271名～600名" id="s5" rel="403000"><label for="s5"><span class="t">271名～600名</span><span class="c">\403,000</span></label></li>
                    </ul>
                </div>
                <div class="sbox">
                    <p class="t">- シアター</p>
                    <ul>
                        <li><input type="radio" name="style" value="シアター10～40名" id="s6" rel="24000"><label for="s6"><span class="t">10～40名</span><span class="c">\24,000</span></label></li>
                        <li><input type="radio" name="style" value="シアター41～100名" id="s7" rel="59000"><label for="s7"><span class="t">41～100名</span><span class="c">\59,000</span></label></li>
                        <li><input type="radio" name="style" value="シアター101～180名" id="s8" rel="95000"><label for="s8"><span class="t">101～180名</span><span class="c">\95,000</span></label></li>
                        <li><input type="radio" name="style" value="シアター181～400名" id="s9" rel="172000"><label for="s9"><span class="t">181～400名</span><span class="c">\172,000</span></label></li>
                        <li><input type="radio" name="style" value="シアター401名～800名" id="s10" rel="403000"><label for="s10"><span class="t">401名～800名</span><span class="c">\403,000</span></label></li>
                    </ul>
                </div>
                <div class="sbox">
                    <p class="t">- コの字、ロの字</p>
                    <ul>
                        <li><input type="radio" name="style" value="コの字、ロの字10～20名" id="s11" rel="24000"><label for="s11"><span class="t">10～20名</span><span class="c">\24,000</span></label></li>
                        <li><input type="radio" name="style" value="コの字、ロの字21～50名" id="s12" rel="59000"><label for="s12"><span class="t">21～50名</span><span class="c">\59,000</span></label></li>
                    </ul>
                </div>
            </div>
        </div>
        
        <div class="box box_long cf">
        	<div class="tit"><p>- オプション</p></div>
            <div class="con cf">
            	<div class="sbox">
                    <ul>
                        <li><input type="checkbox" name="option[]" value="ホワイトボード" id="ss1" rel="2160"><label for="ss1"><span class="t">ホワイトボード</span><span class="c">\2,160</span></label></li>
                        <li><input type="checkbox" name="option[]" value="スクリーン" id="ss2" rel="5400"><label for="ss2"><span class="t">スクリーン</span><span class="c">\5,400</span></label></li>
                        <li><input type="checkbox" name="option[]" value="液晶プロジェクター" id="ss3" rel="324000"><label for="ss3"><span class="t">液晶プロジェクター</span><span class="c">\324,000</span></label></li>
                        <li><input type="checkbox" name="option[]" value="DVDデッキ" id="ss4" rel="108000"><label for="ss4"><span class="t">DVDデッキ</span><span class="c">\108,000</span></label></li>
                        <li><input type="checkbox" name="option[]" value="OHP" id="ss5" rel="108000"><label for="ss5"><span class="t">OHP</span><span class="c">\108,000</span></label></li>
                        <li><input type="checkbox" name="option[]" value="レーザーポインター" id="ss6" rel="2160"><label for="ss6"><span class="t">レーザーポインター</span><span class="c">\2,160</span></label></li>
                        <li><input type="checkbox" name="option[]" value="ピンマイク" id="ss7" rel="1080"><label for="ss7"><span class="t">ピンマイク</span><span class="c">\1,080</span></label></li>
                        <li><input type="checkbox" name="option[]" value="モニター(50インチ)" id="ss8" rel="108000"><label for="ss8"><span class="t">モニター(50インチ)</span><span class="c">\108,000</span></label></li>
                        <li><input type="checkbox" name="option[]" value="ダンスフロア(0.9m×0.9m)1枚" id="ss9" rel="540"><label for="ss9"><span class="t">ダンスフロア(0.9m×0.9m)1枚</span><span class="c">\540</span></label></li>
                        <li><input type="checkbox" name="option[]" value="ピアノ使用料" id="ss10" rel="27000"><label for="ss10"><span class="t">ピアノ使用料</span><span class="c">\27,000</span></label></li>
                        <li><input type="checkbox" name="option[]" value="ピアノ調律" id="ss11" rel="27000"><label for="ss11"><span class="t">ピアノ調律</span><span class="c">\27,000</span></label></li>
                        <li><input type="checkbox" name="option[]" value="司会者" id="ss12" rel="54000"><label for="ss12"><span class="t">司会者</span><span class="c">\54,000</span></label></li>
                        <li><input type="checkbox" name="option[]" value="コンパニオン(120分)" id="ss13" rel="15552"><label for="ss13"><span class="t">コンパニオン(120分)</span><span class="c">\15,552</span></label></li>
                    </ul>
                </div>
                <div class="sbox">
                    <ul>
                        <li><input type="checkbox" name="option[]" value="カラオケ" id="ss14" rel="10800"><label for="ss14"><span class="t">カラオケ</span><span class="c">\10,800</span></label></li>
                        <li><input type="checkbox" name="option[]" value="ビンゴ" id="ss15" rel="10800"><label for="ss15"><span class="t">ビンゴ</span><span class="c">\10,800</span></label></li>
                        <li><input type="checkbox" name="option[]" value="吊看板(7.2m×0.9m)" id="ss16" rel="37800"><label for="ss16"><span class="t">吊看板(7.2m×0.9m)</span><span class="c">\37,800</span></label></li>
                        <li><input type="checkbox" name="option[]" value="吊看板(5.4m×0.6m)" id="ss17" rel="30240"><label for="ss17"><span class="t">吊看板(5.4m×0.6m)</span><span class="c">\30,240</span></label></li>
                        <li><input type="checkbox" name="option[]" value="立て看板(0.9m×1.8m)" id="ss18" rel="162000"><label for="ss18"><span class="t">立て看板(0.9m×1.8m)</span><span class="c">\162,000</span></label></li>
                        <li><input type="checkbox" name="option[]" value="式次第" id="ss19" rel="10800"><label for="ss19"><span class="t">式次第</span><span class="c">\10,800</span></label></li>
                        <li><input type="checkbox" name="option[]" value="芳名帳" id="ss20" rel="3240"><label for="ss20"><span class="t">芳名帳</span><span class="c">\3,240</span></label></li>
                        <li><input type="checkbox" name="option[]" value="名札筆耕料" id="ss21" rel="150"><label for="ss21"><span class="t">名札筆耕料</span><span class="c">\150</span></label></li>
                        <li><input type="checkbox" name="option[]" value="席札筆耕料" id="ss22" rel="150"><label for="ss22"><span class="t">席札筆耕料</span><span class="c">\150</span></label></li>
                        <li><input type="checkbox" name="option[]" value="投げ入れ花" id="ss23" rel="10800"><label for="ss23"><span class="t">投げ入れ花</span><span class="c">\10,800</span></label></li>
                        <li><input type="checkbox" name="option[]" value="卓上装花" id="ss24" rel="2160"><label for="ss24"><span class="t">卓上装花</span><span class="c">\2,160</span></label></li>
                        <li><input type="checkbox" name="option[]" value="盆栽" id="ss25" rel="10800"><label for="ss25"><span class="t">盆栽</span><span class="c">\10,800</span></label></li>
                        <li><input type="checkbox" name="option[]" value="料理卓上装花" id="ss26" rel="10800"><label for="ss26"><span class="t">料理卓上装花</span><span class="c">\10,800</span></label></li>
                    </ul>
                </div>
            </div>
        </div>
        
        <div class="pricebox pricefixed"><div class="in cf">
        	<p class="tt sawa">お見積り金額</p>
        	<p class="p1 sawa"><span>0</span>円</p>
        </div></div>
    
    </div></div>
    <div class="inq_area"><div class="inner">
    
        <h2 class="def sawa">お客様基本情報</h2>
        
        <div class="box cf">
        	<div class="tit"><p>- 代表者氏名 <span class="ERR">※</span></p></div>
            <div class="con"><input name="name_s" type="text" class="txt01" placeholder="例）浜松 太郎"></div>
        </div>
        
        <div class="box cf">
        	<div class="tit"><p>- フリガナ <span class="ERR">※</span></p></div>
            <div class="con"><input name="kana_s" type="text" class="txt01" placeholder="例）ハママツ タロウ"></div>
        </div>
        
        <div class="box cf">
        	<div class="tit"><p>- 団体名</p></div>
            <div class="con"><input name="group" type="text" class="txt01" placeholder="例）株式会社●●"></div>
        </div>
        
        <div class="box cf">
        	<div class="tit"><p>- メールアドレス <span class="ERR">※</span></p></div>
            <div class="con"><input name="email_s" type="text" class="txt01" placeholder="例）ハママツ タロウ">
            	<p class="s">※携帯・スマートフォンからご送信の場合、「concorde.co.jp」からのメールが受信できるように設定をお願いします。</p>
            </div>
        </div>
        
        <div class="box cf">
        	<div class="tit"><p>- ご住所</p></div>
            <div class="con">
            〒 <input name="zip" type="text" class="txt02" placeholder="例）430-0946" onblur="AjaxZip3.zip2addr('zip','','add','add');"><br>
            <input name="add" type="text" class="txt01" placeholder="例）静岡県浜松市中区元城町109-18"></div>
        </div>
        
        <div class="box box_w cf">
        	<div class="tit"><p>- 電話番号</p></div>
            <div class="con"><input name="tel" type="text" class="txt01" placeholder="例）053-457-1111"></div>
        </div>
        
        
        <div class="box cf">
        	<div class="tit"><p>- ご質問、ご要望</p></div>
            <div class="con"><textarea name="other"></textarea></div>
        </div>
        

        
        
        <div class="ssl">
        	<p>ホテルコンコルド浜松では、SSL暗号化技術採用により、お客様の情報を最高水準のセキュリティで保護しています。お客様の個人情報は、適切に管理し第三者に開示・提供することは一切ありません。<br>
<a href="/kiyaku/">&raquo; 当サイトのセキュリティーおよび個人情報の保護について</a></p>
        </div>
        
        
        <div class="submit_area">
			<p><input type="submit" value="送信内容を確認する" class="pushbtn" /></p>
		</div><!-- submit_area -->

		<input type="hidden" name="mailToNum" value="0"/>
		<input type="hidden" name="mode" value="CONFIRM"/>
        <input type="hidden" name="total_v" value="0">
                    
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
<script type="text/javascript">
$(function($) {	
	
	//イベント
	$('input[name="style"]').change(function(){ total_num(); });
	$('input[name="option[]"]').change(function(){ total_num(); });
});


// 金額を変える際のアクション
var tax = 1.08;
var count1 = 0;
var count2 = 0;
var count3 = 0;

function price_change(target,price,count){
	myTimer = setTimeout(function(){
    	price_change(target,price,count);
	},40);
	
	target.html(random_price());
	
	
	count++;
	if (count > 10) {
		count = 0;
		clearTimeout(myTimer);
		target.html(addFigure(price));
	}
}

// ランダム金額生成
function random_price(){
	var ar = [];
	for( var i = 0; i < 6; i++ ){
		var val = Math.round( Math.random()*9 );		
		ar[i] = val;		
	}
	
	var num = ar.join('');
	
	return addFigure(num);
}

// カンマ追加
function addFigure(str) {
	var num = new String(str).replace(/,/g, "");
	while(num != (num = num.replace(/^(-?\d+)(\d{3})/, "$1,$2")));
	return num;
}

// 合計金額
function total_num(){
	var price = 0;
	
	//スタイル
	var style_price = $("input[name='style']:checked").attr('rel') - 0;	
	if( !style_price ){ style_price = 0 }	
	
	//オプション
	var option_price = 0;
	$("input[name='option[]']:checked").each(function(){
		option_price += $(this).attr('rel') - 0;
	});
	
	
	price_n = Math.floor(style_price+option_price);
	
	//price
	price_change($('.p1 span'), price_n, count1);
	
	
	
	//hidden変更
	$("input[name='total_v']").attr('value',addFigure(price_n));
}

function submit_check(){
	var txt = '';
	var flg = false;
	

	
	if( flg ){
		alert(txt);	
	} else {
		document.priceform.submit();
	}
}

// 半角変換
function change_han(val){
	return val.replace(/[Ａ-Ｚａ-ｚ０-９]/g,function(s){return String.fromCharCode(s.charCodeAt(0)-0xFEE0)});		
}
</script>
</body>
</html>
