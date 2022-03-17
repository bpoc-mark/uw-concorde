<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js" type="text/javascript" ></script>
<script src="/js/animatescroll.js" type="text/javascript"></script>
<script src="/js/jquery.matchHeight.js" type="text/javascript"></script>
<script src="/js/common.js" type="text/javascript"></script>

<script type="text/javascript">
$(function($) {

});
</script>


<!-- Yahoo Code for your Target List -->
<script type="text/javascript">
/* <![CDATA[ */
var yahoo_ss_retargeting_id = 1001014706;
var yahoo_sstag_custom_params = window.yahoo_sstag_params;
var yahoo_ss_retargeting = true;
/* ]]> */
</script>
<script type="text/javascript" src="https://s.yimg.jp/images/listing/tool/cv/conversion.js">
</script>
<noscript>
<div style="display:inline;">
<img height="1" width="1" style="border-style:none;" alt="" src="https://b97.yahoo.co.jp/pagead/conversion/1001014706/?guid=ON&script=0&disvt=false"/>
</div>
</noscript>

<!-- Yahoo Code for your Target List -->
<script type="text/javascript" language="javascript">
/* <![CDATA[ */
var yahoo_retargeting_id = 'UGFHC05A50';
var yahoo_retargeting_label = '';
var yahoo_retargeting_page_type = '';
var yahoo_retargeting_items = [{item_id: '', category_id: '', price: '', quantity: ''}];
/* ]]> */
</script>
<script type="text/javascript" language="javascript" src="https://b92.yahoo.co.jp/js/s_retargeting.js"></script>

<!-- リマーケティング タグの Google コード -->
<!--------------------------------------------------
リマーケティング タグは、個人を特定できる情報と関連付けることも、デリケートなカテゴリに属するページに設置することも許可されません。タグの設定方法については、こちらのページをご覧ください。
http://google.com/ads/remarketingsetup
--------------------------------------------------->
<script type="text/javascript">
/* <![CDATA[ */
var google_conversion_id = 797450771;
var google_custom_params = window.google_tag_params;
var google_remarketing_only = true;
/* ]]> */
</script>
<script type="text/javascript" src="//www.googleadservices.com/pagead/conversion.js">
</script>
<noscript>
<div style="display:inline;">
<img height="1" width="1" style="border-style:none;" alt="" src="//googleads.g.doubleclick.net/pagead/viewthroughconversion/797450771/?guid=ON&amp;script=0"/>
</div>
</noscript>

<script>
    
$(function() {

//ローディングの設定
  var loadCount = 0,
    imgLength = $("img").length;
$("img").each(function() {
  var src = $(this).attr("src");
  $("<img>")
  .attr("src", src)
  .on('load', function() {
    loadCount++;
  });
});

var timer = setInterval(function() {  //読み込みをスタイルに反映させる
    $("#loader-bg .loader").css({
      "width": (loadCount / imgLength) * 100 + "%"
    });
    if((loadCount / imgLength) * 100 == 100){ //100%読み込んだら
      clearInterval(timer);
      $("#loader-bg").delay(500).fadeOut(800);
    }
}, 5);

setTimeout(function(){  //ロードが終わらなくても5sで終了させる
  $("#loader-bg").delay(500).fadeOut(300);
}, 2000);
// ローディングの設定ここまで
});
</script>