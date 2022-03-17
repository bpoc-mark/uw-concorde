<?php $url = $_SERVER['REQUEST_URI'];$str = explode('/', $url); ?>

	<p class="logo"><a href="/">
    <img src="/images/common/logo.png" alt="" class="pc">
    <img src="/sp/images/common/logo.png" alt="" class="sp">
    </a></p>
    
    <div class="nav">
    	<ul class="cf">
        	<li><a href="/rooms/"<?php if($str[1]=="rooms"){ echo ' class="here"'; } ?>>ご宿泊<span></span></a></li>
            <li><a href="/restaurant/"<?php if($str[1]=="restaurant"){ echo ' class="here"'; } ?>>レストラン<span></span></a></li>
            <li><a href="/anniversary/" target="_blank">お祝い･法要<span></span></a></li>
            <li><a href="/party/"<?php if($str[1]=="party"){ echo ' class="here"'; } ?>>会議･宴会<span></span></a></li>
            <li><a href="https://concordewedding.business.site/" target="_blank">ウェディング<span></span></a></li>
            <li><a href="/info/"<?php if(($str[1]=="info") && ($str[2]!="access.php")){ echo ' class="here"'; } ?>>館内案内<span></span></a></li>
            <li><a href="/info/access.php"<?php if($str[2]=="access.php"){ echo ' class="here"'; } ?>>アクセス<span></span></a></li>
        </ul>
    </div>
    
    <div class="lang_over cf">
    	<p class="close"><a href="javascript:void(0)"><span></span><span></span></a></p>
    	<p class="l ropa">LANGUAGE</p>
        <p class="r ropa"><a href="https://hpdsp.jp/hotel-concorde/en/" target="_blank" class="ropa w">English<span></span></a>&nbsp;&nbsp;&nbsp;/&nbsp;&nbsp;&nbsp;<a href="https://hpdsp.jp/hotel-concorde/zh-cn/" target="_blank" class="s">簡体<span></span></a>&nbsp;&nbsp;&nbsp;/&nbsp;&nbsp;&nbsp;<a href="https://hpdsp.jp/hotel-concorde/zh-tw/" target="_blank" class="s">繁体<span></span></a><strong class="pc">&nbsp;&nbsp;&nbsp;/&nbsp;&nbsp;&nbsp;</strong><br class="sp"><a href="https://hpdsp.jp/hotel-concorde/ko/" target="_blank" class="s w">한국어<span></span></a>&nbsp;&nbsp;&nbsp;/&nbsp;&nbsp;&nbsp;<a href="/" class="s here w">日本語<span></span></a></p>
    </div>