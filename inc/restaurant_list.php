<?php $url = $_SERVER['REQUEST_URI'];$str = explode('/', $url); ?>
<div class="other_list cf">
	<h2 class="def sawa">レストラン一覧</h2>

	<div class="box<?php if($str[2]=="champs"){ echo ' here'; } ?>"><a href="/restaurant/champs/">
    	<p class="ph"><img src="/sp/images/restaurant/common/ph01.jpg" alt="シャンゼリゼ"></p>
        <p class="s">和洋中･ビュッフェ･ダイニング</p>
        <p class="t">シャンゼリゼ</p>
    </a></div>
    
    <div class="box<?php if($str[2]=="concorde"){ echo ' here'; } ?>"><a href="/restaurant/concorde/">
    	<p class="ph"><img src="/sp/images/restaurant/common/ph02.jpg" alt="シャンゼリゼ アラカルト"></p>
        <p class="s">洋食</p>
        <p class="t">シャンゼリゼ アラカルト</p>
    </a></div>
    
    <div class="box<?php if($str[2]=="dohman"){ echo ' here'; } ?>"><a href="/restaurant/dohman/">
    	<p class="ph"><img src="/sp/images/restaurant/common/ph03.jpg" alt="堂満"></p>
        <p class="s">日本料理</p>
        <p class="t">堂満</p>
    </a></div>
    
    <div class="box<?php if($str[2]=="bonjour"){ echo ' here'; } ?>"><a href="/restaurant/bonjour/" class="nolink">
    	<p class="ph"><img src="/sp/images/restaurant/common/ph04.jpg" alt="ボンジュール"></p>
        <p class="s pc" style="color: #323232;">セルフティーラウンジ</p>
        <p class="t pc" style="color: #323232;">ボンジュール</p>
        <p class="s sp">セルフティーラウンジ</p>
        <p class="t sp">ボンジュール</p>
        <p class="stop">営業休止中</p>
    </a></div>
    <!--
    <div class="box<?php if($str[2]=="wongfu"){ echo ' here'; } ?>"><a href="/restaurant/wongfu/">
    	<p class="ph"><img src="/sp/images/restaurant/common/ph05.jpg" alt="王府井"></p>
        <p class="s">中国料理</p>
        <p class="t">王府井</p>
    </a></div>
    -->
</div>