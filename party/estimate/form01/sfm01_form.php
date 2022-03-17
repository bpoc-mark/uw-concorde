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
    	<p class="c"><strong><span class="ERR">現在、「新しい生活様式」指針のもと、お引き受け人数・会場を限定させていただいております。<br>
        （下記フォームにて表示される会場使用料・お見積り金額は現状に則しておりません。）</span></strong><br>
        ＜現状の会議場使用料一例：2時間＞<br>
        3名～8名（約56&#13217;）&ensp;24,750円<br>
        10名～16名（約90&#13217;）&ensp;47,850円<br>
        14名～36名（約144&#13217;）&ensp;60,500円<br>
        26名～135名（約400&#13217;）&ensp;175,450円<br>
        ※レイアウト（コの字・スクール・シアター等）により会場が異なります。<br>
        ※表示価格（税込）<br><br>
        会場やお時間・ご利用内容によって金額は変動いたしますので<br class="pc">正式な金額は後日、打ち合わせ時に、ご確認ください。<br>
        そのままご相談いただく場合は、「送信内容を確認する」をクリックしてください。</p>
    </div>


	<div class="inq_area inq_area_w"><div class="inner">
    <form method="post" name="sfm-form" id="sfm-form" action>
    
    	<h2 class="def sawa">ご利用内容</h2>


        <div class="box cf">
        	<div class="tit"><p>- ご利用日時 <span class="ERR">※</span></p></div>
            <div class="con">
            <select name="year_s" class="s">
<option value="" selected>----</option>
<option value="2022">2022</option>
<option value="2023">2023</option>
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
        	<div class="tit"><p>- 会議スタイル  ※2時間のお見積もり計算 <span class="ERR">※</span></p></div>
            <div class="con">
            	<ul>
                	<li><input type="radio" name="style" value="スクール" id="s1"><label for="s1">スクール（10～800名）</label><span class="tt">ステージに対し、机といすをご用意するスタイル</span></li>
                    <li><input type="radio" name="style" value="シアター" id="s2"><label for="s2">シアター（10～800名）</label><span class="tt">ステージに対し、いすのみをご用意するスタイル</span></li>
                    <li><input type="radio" name="style" value="コの字・ロの字" id="s3"><label for="s3">コの字・ロの字（10～50名）</label></li>
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
                <option value="610" class="s3">610</option>
                <option value="620" class="s3">620</option>
                <option value="630" class="s3">630</option>
                <option value="640" class="s3">640</option>
                <option value="650" class="s3">650</option>
                <option value="660" class="s3">660</option>
                <option value="670" class="s3">670</option>
                <option value="680" class="s3">680</option>
                <option value="690" class="s3">690</option>
                <option value="700" class="s3">700</option>
                <option value="710" class="s3">710</option>
                <option value="720" class="s3">720</option>
                <option value="730" class="s3">730</option>
                <option value="740" class="s3">740</option>
                <option value="750" class="s3">750</option>
                <option value="760" class="s3">760</option>
                <option value="770" class="s3">770</option>
                <option value="780" class="s3">780</option>
                <option value="790" class="s3">790</option>
                <option value="800" class="s3">800</option>
            </select>
            </div>
        </div>
        
        <div class="box cf">
        	<div class="tit"><p>- 会場使用料</p></div>
            <div class="con"><p id="kaijyo"><span>0</span>円</p><input type="hidden" name="kaijyo" value=""></div>
        </div>
        
        
        
        <div class="box cf">
        	<div class="tit"><p>- オプション</p></div>
            <div class="con cf">
            	<div class="sbox">
                    <ul>
                        <li><input type="checkbox" name="option[]" value="ホワイトボード" id="ss1" rel="2200"><label for="ss1"><span class="t">ホワイトボード</span><span class="c">&yen;2,200</span></label></li>
                        <li><input type="checkbox" name="option[]" value="スクリーン" id="ss2" rel="5500"><label for="ss2"><span class="t">スクリーン</span><span class="c">&yen;5,500</span></label></li>
                        <li><input type="checkbox" name="option[]" value="液晶プロジェクター" id="ss3" rel="33000"><label for="ss3"><span class="t">液晶プロジェクター</span><span class="c">&yen;33,000</span></label></li>
                        <li><input type="checkbox" name="option[]" value="DVDデッキ" id="ss4" rel="11000"><label for="ss4"><span class="t">DVDデッキ</span><span class="c">&yen;11,000</span></label></li>
                        <li><input type="checkbox" name="option[]" value="OHP" id="ss5" rel="11000"><label for="ss5"><span class="t">OHP</span><span class="c">&yen;11,000</span></label></li>
                        <li><input type="checkbox" name="option[]" value="レーザーポインター" id="ss6" rel="2200"><label for="ss6"><span class="t">レーザーポインター</span><span class="c">&yen;2,200</span></label></li>
                        <li><input type="checkbox" name="option[]" value="ピンマイク" id="ss7" rel="1100"><label for="ss7"><span class="t">ピンマイク</span><span class="c">&yen;1,100</span></label></li>
                        <li><input type="checkbox" name="option[]" value="モニター(50インチ)" id="ss8" rel="11000"><label for="ss8"><span class="t">モニター(50インチ)</span><span class="c">&yen;11,000</span></label></li>
                        
                        <li><input type="checkbox" name="option[]" value="司会者" id="ss12" rel="55000"><label for="ss12"><span class="t">司会者</span><span class="c">&yen;55,000</span></label></li>
                    </ul>
                </div>
                <div class="sbox">
                    <ul>
                        
                        <li><input type="checkbox" name="option[]" value="吊看板(7.2m×0.9m)" id="ss16" rel="38500"><label for="ss16"><span class="t">吊看板(7.2m×0.9m)</span><span class="c">&yen;38,500</span></label></li>
                        <li><input type="checkbox" name="option[]" value="吊看板(5.4m×0.6m)" id="ss17" rel="30800"><label for="ss17"><span class="t">吊看板(5.4m×0.6m)</span><span class="c">&yen;30,800</span></label></li>
                        <li><input type="checkbox" name="option[]" value="立て看板(0.9m×1.8m)" id="ss18" rel="16500"><label for="ss18"><span class="t">立て看板(0.9m×1.8m)</span><span class="c">&yen;16,500</span></label></li>
                        
                        <li><input type="checkbox" name="option[]" value="名札筆耕料" id="ss21" rel="154"><label for="ss21"><span class="t">名札筆耕料(1名)</span><span class="c">&yen;154×人数</span></label></li>
                        <li><input type="checkbox" name="option[]" value="席札筆耕料" id="ss22" rel="154"><label for="ss22"><span class="t">席札筆耕料(1名)</span><span class="c">&yen;154×人数</span></label></li>
                        <li><input type="checkbox" name="option[]" value="投げ入れ花" id="ss23" rel="11000"><label for="ss23"><span class="t">投げ入れ花</span><span class="c">&yen;11,000</span></label></li>
                        <li><input type="checkbox" name="option[]" value="盆栽" id="ss25" rel="11000"><label for="ss25"><span class="t">盆栽</span><span class="c">&yen;11,000</span></label></li>
                    </ul>
                </div>
                
                <p class="form_note">※その他、お弁当の手配・お食事のご用意なども承ります。<br>詳しくはお問い合わせくださいませ。</p>
            </div>
        </div>
        
        <div class="box cf">
        	<div class="tit"><p>- オプション料金</p></div>
            <div class="con"><p id="op"><span>0</span>円</p><input type="hidden" name="op" value=""></div>
        </div>
        
        <div class="pricebox pricefixed"><div class="in cf">
        	<p class="tt sawa">お見積り金額</p>
        	<p class="p1 sawa"><span>0</span>円</p>
            
        </div>
        <p class="s">※おおよその概算になりますので実際は異なる場合がございます。</p>
        </div>
    
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
            <div class="con"><input name="email_s" type="text" class="txt01" placeholder="例）info@concorde.co.jp">
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
            <div class="con"><input name="tel" type="text" class="txt01" placeholder="例）053-487-0990"></div>
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
<script src="/js/estimate.js" charset="UTF-8"></script>

<script type="text/javascript">
$(function($) {	
	
	total_num(true);
	
	//イベント
	$('input[name="style"]').change(function(){ total_num(); });
	$('select[name="people"]').change(function(){ total_num(); });
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


function price_change_n(target,price){
	target.html(addFigure(price));
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
function total_num(flg){
	var price = 0;
	
	//スタイル
	var style = $("input[name='style']:checked").attr('value');
	
	
	if( style == "コの字・ロの字" ){
		$("select[name='people'] option.s3").hide();
		
		var n = $("select[name='people'] option:selected").attr('value') - 0;
		if( n > 50 ){
			$("select[name='people'] option").attr('selected',false);
		}
	} else {
		$("select[name='people'] option.s3").show();
	}
	
	var number = $("select[name='people'] option:selected").attr('value');
	
	if( style && number ){
		var style_price = kaigi_price[style][number];
	} else {
		style_price = 0;
	}
	
	price_change_n($('#kaijyo span'), style_price);
	$("input[name='kaijyo']").attr('value',addFigure(style_price));
	
	//オプション
	var option_price = 0;
	$("input[name='option[]']:checked").each(function(){
		var v = $(this).val();
		
		if( (v == '名札筆耕料') || (v == '席札筆耕料') ){
			option_price += ($(this).attr('rel') - 0)*number;
		} else {
			option_price += $(this).attr('rel') - 0;
		}
	});
	
	price_change_n($('#op span'), option_price);
	$("input[name='op']").attr('value',addFigure(option_price));
	
	
	price_n = Math.floor(style_price+option_price);
	
	//price
	if( flg ){
	price_change_n($('.p1 span'), price_n, count1);
	} else {
	price_change($('.p1 span'), price_n, count1);	
	}
	
	
	
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
