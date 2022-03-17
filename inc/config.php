<?php
include($_SERVER['DOCUMENT_ROOT']."/inc/common.php");

$val = $_COOKIE["switchScreen"];

/*=====================================================
	
	サイト情報

=====================================================*/

//サイトURL統一
if($_SERVER['HTTPS'] == "on"){ $PROTOCOL = "https://"; }else{ $PROTOCOL = "http://"; }
define("CANONICAL",$PROTOCOL.$_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI']);


//サイト名
define("SITE_NAME", "ホテルコンコルド浜松【公式】サイト");

//キーワード
define("KEY_WORD", "ホテル,浜松,レストラン,バイキング,朝食,宴会,会議,ウェディング,ブライダル,駐車場");

//ディスクリプション
define("DESCRIPTION", "浜松城公園となりの「ホテルコンコルド浜松」公式ページ。無料の平面駐車場200台完備、浜松中心市街地・繁華街から車で3分の立地です。ご宿泊はもちろん、レストラン、結婚式、ご宴席、会議など承ります。");

//H1文言
define("SEO_WORDS", "");


?>
