<?php $url = $_SERVER['REQUEST_URI'];$str = explode('/', $url); ?>
<div class="other_list cf">
	<h2 class="def sawa">客室</h2>

	<div class="box<?php if($str[2]=="single"){ echo ' here'; } ?>"><a href="/rooms/single/">
    	<p class="ph"><img src="/sp/images/rooms/top/ph01.jpg" alt="シングルルーム"></p>
        <p class="t t2">シングルルーム</p>
    </a></div>
    
    <div class="box<?php if($str[2]=="double"){ echo ' here'; } ?>"><a href="/rooms/double/">
    	<p class="ph"><img src="/sp/images/rooms/top/ph02.jpg" alt="ダブルルーム"></p>
        <p class="t t2">ダブルルーム</p>
    </a></div>
    
    <div class="box<?php if($str[2]=="twin"){ echo ' here'; } ?>"><a href="/rooms/twin/">
    	<p class="ph"><img src="/sp/images/rooms/top/ph03.jpg" alt="ツインルーム Aタイプ"></p>
        <p class="t t2">ツインルーム Aタイプ</p>
    </a></div>
    
    <div class="box<?php if($str[2]=="ctwin"){ echo ' here'; } ?>"><a href="/rooms/ctwin/">
    	<p class="ph"><img src="/sp/images/rooms/top/ph04.jpg" alt="ツインルーム Bタイプ"></p>
        <p class="t t2">ツインルーム Bタイプ</p>
    </a></div>
    
    <div class="box<?php if($str[2]=="dtwin"){ echo ' here'; } ?>"><a href="/rooms/dtwin/">
    	<p class="ph"><img src="/sp/images/rooms/top/ph05.jpg" alt="デラックスツインルーム"></p>
        <p class="t t2">デラックスツインルーム</p>
    </a></div>
    
    <div class="box<?php if($str[2]=="triple"){ echo ' here'; } ?>"><a href="/rooms/triple/">
    	<p class="ph"><img src="/sp/images/rooms/top/ph06.jpg" alt="トリプルルーム"></p>
        <p class="t t2">トリプルルーム</p>
    </a></div>
    
    <div class="box<?php if($str[2]=="sweet"){ echo ' here'; } ?>"><a href="/rooms/sweet/">
    	<p class="ph"><img src="/sp/images/rooms/top/ph07.jpg" alt="スイートルーム"></p>
        <p class="t t2">スイートルーム</p>
    </a></div>
    
    <?php if($str[2]!=""): ?>
    <p class="linkbtn"><a href="/rooms/">宿泊TOPへ</a></p>
    <?php endif; ?>
        
</div>