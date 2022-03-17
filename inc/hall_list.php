<?php $url = $_SERVER['REQUEST_URI'];$str = explode('/', $url); ?>
<div class="other_list hall_li cf">
	<h2 class="def sawa">宴会･会議室一覧</h2>

	<div class="box<?php if($str[3]=="hall01.php"){ echo ' here'; } ?>"><a href="/party/hall/hall01.php">
    	<p class="ph"><img src="/sp/images/party/hall/hall01/ph01.jpg" alt="大宴会･会議場（最大1,000名）"></p>
        <p class="t t2">大宴会･会議場<br class="sp"><span class="ss">（最大1,000名）</span></p>
    </a></div>

    <div class="box<?php if($str[3]=="hall02.php"){ echo ' here'; } ?>"><a href="/party/hall/hall02.php">
    	<p class="ph"><img src="/sp/images/party/hall/hall02/ph02.jpg" alt="中宴会･会議場（最大300名）"></p>
        <p class="t t2">中宴会･会議場<br class="sp"><span class="ss">（最大300名）</span></p>
    </a></div>

    <div class="box<?php if($str[3]=="hall03.php"){ echo ' here'; } ?>"><a href="/party/hall/hall03.php">
    	<p class="ph"><img src="/sp/images/party/hall/hall03/ph03.jpg" alt="宴会･会議場（最大100名）"></p>
        <p class="t t2">宴会･会議場<br class="sp"><span class="ss">（最大100名）</span></p>
    </a></div>

    <div class="box<?php if($str[3]=="hall04.php"){ echo ' here'; } ?>"><a href="/party/hall/hall04.php">
    	<p class="ph"><img src="/sp/images/party/hall/hall04/ph02.jpg" alt="小宴会･会議場（最大40名）"></p>
        <p class="t t2">小宴会･会議場<br class="sp"><span class="ss">（最大40名）</span></p>
    </a></div>

    <div class="box<?php if($str[3]=="hall05.php"){ echo ' here'; } ?>"><a href="/party/hall/hall05.php">
    	<p class="ph"><img src="/sp/images/party/hall/hall05/ph02.jpg" alt="スカイバンケット"></p>
        <p class="t t2">スカイバンケット</p>
    </a></div>

    <?php if($str[2]!=""): ?>
    <p class="linkbtn"><a href="/party/">宴会･会議TOPへ</a></p>
    <?php endif; ?>

</div>