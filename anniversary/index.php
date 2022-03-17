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
  <title>お祝い・法要プラン｜<?php echo SITE_NAME ?></title>

  <meta property="og:title" content="お祝い・法要プラン｜<?php echo SITE_NAME ?>">
  <meta property="og:type" content="website">
  <meta property="og:description" content="<?php echo DESCRIPTION ?>">
  <meta property="og:url" content="<?php echo CANONICAL ?>">
  <meta property="og:image" content="/images/fb_ogp-image.jpg">

  <?php include($_SERVER['DOCUMENT_ROOT']."/inc/header_include.php");?>

  <link href="/css/anniversary.css" media="print" rel="stylesheet">
  <link href="/css/anniversary.css" media="screen and (min-width: 871px)" rel="stylesheet">
  <link href="/sp/css/anniversary.css" media="only screen and (max-width: 870px)" rel="stylesheet">

  <?php include($_SERVER['DOCUMENT_ROOT']."/inc/ga.php");?>
  <?php include($_SERVER['DOCUMENT_ROOT']."/inc/tag/header_tag.php");?>
</head>

<body>
  <?php include($_SERVER['DOCUMENT_ROOT']."/inc/tag/content_tag.php");?>
  <div id="AllBox">
    <header>
      <p class="logo"><a href="/">
        <img src="/images/common/logo.png" alt="" class="pc">
        <img src="/sp/images/common/logo.png" alt="" class="sp">
      </a></p>
    </header>
    <main>
      <section class="intro"><div class="inner">
        <div class="main">
          <!-- <p class="top_info"><span>【館内レストラン・ラウンジ休業期間延長のお知らせ】</span><br>ホテルコンコルド浜松では、お客様と従業員の安全を第一と考え、5月31日(日)まで館内レストランを臨時休業としておりましたが、新型コロナウイルスの感染拡大防止のため、休業期間を下記のとおり延長させていただくことに致しました。<br>何卒ご理解とご協力を賜りますようお願い申し上げます。<br><br>【休業期間】<br>2020年4月6日(月)～当面の間<br>【対象施設】<br>シャンゼリゼ・日本料理「堂満」・bistro コンコルド・セルフティーラウンジ「ボンジュール」<br><br>※尚、営業再開につきましては今後の状況を鑑み検討し、当館公式HPにてお知らせさせていただきますので、公式HPをご確認いただきますよう重ねてお願い申し上げます。</p> -->
          <p>
            <img class="pc" src="/images/anniversary/main_small.png" alt="ホテルコンコルド浜松のお祝い・法要プラン">
            <img class="sp" src="/sp/images/anniversary/main_small.png" alt="ホテルコンコルド浜松のお祝い・法要プラン">
          </p>
<!--
          <div class="ph_wrap">
            <ul>
              <li class="l">
                <img class="pc" src="/images/anniversary/ph01.png" alt="お子様のお祝いににふさわしい特別なお料理を。">
                <img class="sp" src="/sp/images/anniversary/ph01.png" alt="お子様のお祝いににふさわしい特別なお料理を。">

                <p>お子様のお祝いににふさわしい特別なお料理を。</p>
              </li>
              <li class="r">
                <img class="pc" src="/images/anniversary/ph02.png" alt="節目のお祝いに彩りを演出するコース料理全6種類">
                <img class="sp" src="/sp/images/anniversary/ph02.png" alt="節目のお祝いに彩りを演出するコース料理全6種類">

                <p>節目のお祝いに彩りを演出するコース料理全6種類<br><span>※写真はAコース和食料理イメージです</span></p>
              </li>
            </ul>
          </div>
-->
          <div class="nav_wrap">
            <img class="sp" src="/sp/images/anniversary/main_b.png" alt="">
            <ul>
              <li><a href="#Aus">
                <img class="pc" src="/images/anniversary/btn_aus.jpg" alt="お祝い">
                <img class="sp" src="/sp/images/anniversary/btn_aus.jpg" alt="お祝い">
              </a></li>
              <li><a href="#Bms">
                <img class="pc" src="/images/anniversary/btn_bms.jpg" alt="法要">
                <img class="sp" src="/sp/images/anniversary/btn_bms.jpg" alt="法要">
              </a></li>
            </ul>
          </div>
        </div>

        <div class="specialMenu">
          <h2>
            <img class="pc" src="/images/anniversary/special_tl.png" alt="特別な日のお祝いを彩るお料理">
            <img class="sp" src="/sp/images/anniversary/special_tl.png" alt="特別な日のお祝いを彩るお料理">
          </h2>
          <ul>
            <li class="planChild">
              <div class="child_inner">
                <div class="ph pc"><img src="/images/anniversary/special_CH.png" alt=""></div>
                <div class="text cf pc">
                  <p class="price"><img src="/images/anniversary/special_CH_price.png" alt="お子様メニュー 550円(税込)～"></p>
                  <p class="info">ホテルコンコルド浜松では、お子様の年齢に合わせ、遊び心を取り入れたお子様メニューを幅広くご用意しております。</p>
                  <ul class="att">
                    <li>※写真は2,750円（税込）のログハウスランチです。</li>
                  </ul>
                  <p class="childmenu"><a href="https://www.concorde.co.jp/recommend/post-40.php" target="_blank" rel="noopener"><img src="/images/anniversary/btn_child.jpg" alt="詳しいお子様料理内容はこちら"></a></p>
                </div>
                <div class="wrap sp">
                  <div class="ph"><img src="/sp/images/anniversary/special_CH.png" alt=""></div>
                  <div class="text_wrap">
                    <p class="price"><img src="/sp/images/anniversary/special_CH_price.png" alt="お子様メニュー 550円(税込)～"></p>
                  </div>
                </div>
                <div class="text sp">
                  <p class="info">ホテルコンコルド浜松では、お子様の年齢に合わせ、遊び心を取り入れたお子様メニューを幅広くご用意しております。</p>
                  <ul class="att">
                    <li>※写真は2,750円（税込）のログハウスランチです。</li>
                  </ul>
                  <p class="childmenu"><a href="https://www.concorde.co.jp/recommend/post-40.php" target="_blank" rel="noopener"><img src="/sp/images/anniversary/btn_child.png" alt="詳しいお子様料理内容はこちら"></a></p>
                </div>
              </div>
              <p class="allergy">ホテルコンコルド浜松ではお子様が安心してお食事をお楽しみいただけるようアレルギーや苦手な食材に対応したお料理をご用意いたします。些細なことでもお気軽にご相談ください。</p>
            </li>
            <li class="planA">
              <div class="ph pc"><img src="/images/anniversary/special_A.png" alt="Aコース"></div>
              <div class="text cf pc">
                <p class="price"><img src="/images/anniversary/special_A_price.png" alt="Aコース お一人様 10,780円(税込)"></p>
                <p class="info">人数様に合わせた天然真鯛の姿造りは圧巻。<br>お食事には鰻のせいろ蒸しを用意し、贅を楽しむお祝い料理です。</p>
                <ul class="att">
                  <li>※写真はAコース和食イメージです。</li>
                  <li>※和洋折衷料理は冷菜が白身魚と帆立のアンサンブルに、<br>煮物が牛ヒレ肉のステーキに変更になります。</li>
                </ul>
              </div>
              <div class="wrap sp">
                <div class="ph"><img src="/sp/images/anniversary/special_A.png" alt=""></div>
                <div class="text_wrap">
                  <p class="price"><img src="/sp/images/anniversary/special_A_price.png" alt="Aコース お一人様 10,780円(税込)"></p>
                </div>
              </div>
              <div class="text sp">
                <p class="info">人数様に合わせた天然真鯛の姿造りは圧巻。<br>お食事には鰻のせいろ蒸しを用意し、贅を楽しむお祝い料理です。</p>
                <ul class="att">
                  <li>※写真はAコース和食イメージです。</li>
                  <li>※和洋折衷料理は冷菜が白身魚と帆立のアンサンブルに、煮物が牛ヒレ肉のステーキに変更になります。</li>
                </ul>
              </div>
            </li>
            <li class="planB">
              <div class="ph pc"><img src="/images/anniversary/special_B.png" alt="Bコース"></div>
              <div class="text cf pc">
                <p class="price"><img src="/images/anniversary/special_B_price.png" alt="Bコース お一人様 8,580円(税込)"></p>
                <p class="info">浜松パワーフードを使用した色鮮やかな前八寸はお祝いに華を添え、<br>デザートにはホールケーキをご用意したお祝いにふさわしいコース料理です。</p>
                <ul class="att">
                  <li>※写真はBコース和洋折衷料理イメージです。</li>
                  <li>※和食料理は洋皿がみっかび牛バラ肉柔らか煮に変更になります。</li>
                </ul>
              </div>
              <div class="wrap sp">
                <div class="ph"><img src="/sp/images/anniversary/special_B.png" alt=""></div>
                <div class="text_wrap">
                  <p class="price"><img src="/sp/images/anniversary/special_B_price.png" alt="Bコース お一人様 8,580円(税込)"></p>
                </div>
              </div>
              <div class="text sp">
                <p class="info">浜松パワーフードを使用した色鮮やかな前八寸はお祝いに華を添え、デザートにはホールケーキをご用意したお祝いにふさわしいコース料理です。</p>
                <ul class="att">
                  <li>※写真はBコース和洋折衷料理イメージです。</li>
                  <li>※和食料理は洋皿がみっかび牛バラ肉柔らか煮に変更になります。</li>
                </ul>
              </div>
            </li>
            <li class="planC">
              <div class="ph pc"><img src="/images/anniversary/special_C.png" alt="Cコース"></div>
              <div class="text cf pc">
                <p class="price"><img src="/images/anniversary/special_C_price.png" alt="Cコース お一人様 6,930円(税込)"></p>
                <p class="info">茶碗蒸しやお造り、天麩羅など、オーソドックスな和食会席料理です。<br>デザートにはお祝いのメッセージを添えてご用意いたします。</p>
                <ul class="att">
                  <li>※写真はCコース和食イメージです。</li>
                  <li>※和洋折衷料理は焼物が鴨のローストに変更になります。</li>
                </ul>
              </div>
              <div class="wrap sp">
                <div class="ph"><img src="/sp/images/anniversary/special_C.png" alt=""></div>
                <p class="price">
                  <img src="/sp/images/anniversary/special_C_price.png" alt="Cコース お一人様 6,930円(税込)">
                </p>
              </div>
              <div class="text sp">
                <p class="info">茶碗蒸しやお造り、天麩羅など、オーソドックスな和食会席料理です。<br>デザートにはお祝いのメッセージを添えてご用意いたします。</p>
                <ul class="att">
                  <li>※写真はCコース和食イメージです。</li>
                  <li>※和洋折衷料理は焼物が鴨のローストに変更になります。</li>
                </ul>
              </div>
            </li>
          </ul>
          <p class="btn"><a href="https://www.concorde.co.jp/recommend/post-41.php" target="_blank" rel="noopener">
            <img class="pc" src="/images/anniversary/btn_special.jpg" alt="詳しい料理内容はこちら">
            <img class="sp" src="/sp/images/anniversary/btn_special.png" alt="詳しい料理内容はこちら">
          </a></p>
        </div>

        <div class="venue">
          <h2>
            <img class="pc" src="/images/anniversary/intro_text01.png" alt="〈ホテルだから出来る〉多彩な会場でご用意 ">
            <img class="sp" src="/sp/images/anniversary/intro_text01.png" alt="〈ホテルだから出来る〉多彩な会場でご用意 ">
          </h2>
          <ul>
            <li>
              <img class="pc" src="/images/anniversary/intro_venue01new.png" alt="">
              <img class="sp" src="/sp/images/anniversary/intro_venue01new.png" alt="">
              <p>気楽にご利用頂ける店内テーブル席は、<br>少人数でのご利用にオススメです。</p>
            </li>
            <li>
              <img class="pc" src="/images/anniversary/intro_venue02.png" alt="">
              <img class="sp" src="/sp/images/anniversary/intro_venue02.png" alt="">
              <p>落ち着いた個室で<br>ごゆっくりお過ごし頂けます。</p>
            </li>
            <li>
              <img class="pc" src="/images/anniversary/intro_venue03new.png" alt="">
              <img class="sp" src="/sp/images/anniversary/intro_venue03new.png" alt="">
              <p>ご人数に合わせて、大小様々な会場から<br>最適なものをご提案させて頂きます。</p>
            </li>
          </ul>
          <p class="att">※ ご利用人数、空席状況によっては、ご希望のお席をご用意致しかねる場合がございます。</p>
        </div>
      </div></section>

      <section id="Aus" class="auspicious"><div class="inner">
        <h2>
          <img class="pc" src="/images/anniversary/auspicious_tl.png" alt="お祝い">
          <img class="sp" src="/sp/images/anniversary/auspicious_tl.png" alt="お祝い">
        </h2>

<!-- 顔合わせ -->
        <div class="box plan01">
          <div class="info cf">
            <h3 class="sp"><img src="/sp/images/anniversary/plan01_tl.png" alt="両家顔合わせプラン"></h3>
            <div class="ph">
              <img class="pc" src="/images/anniversary/plan01_ph.png" alt="">
              <img class="sp" src="/sp/images/anniversary/plan01_ph.png" alt="">
            </div>
            <div class="textWrap">
              <h3 class="pc"><img src="/images/anniversary/plan01_tl.png" alt="両家顔合わせプラン"></h3>
              <p>ご結婚されるお二人の幸せを祝うため、ご家族・ご親族でゆっくりとお食事頂けるご両家顔合わせプランをご用意しております。<br>プラン特典として、ホテルパティシエ特製ケーキのご用意と記念のスナップ写真をお撮り致します。</p>
              <p class="att">※ 結納は承っておりません。</p>
              <a href="https://www.concorde.co.jp/recommend/post-21.php" class="btn"><img class="pc" src="/images/anniversary/btn_plan.jpg" alt="プランを詳しくみる"><img class="sp" src="/sp/images/anniversary/btn_plan.jpg" alt="プランを詳しくみる"></a>
            </div>
          </div>
       
          <ul class="course-list">
            <li>
              <div class="course-icon">
                <img class="pc" src="/images/anniversary/icon-a.png" alt="Aコース">
                <img class="sp" src="/sp/images/anniversary/courseA.png" alt="Aコース">
              </div>
              <div class="main-wrap">
                <figure><img class="pc" src="/images/anniversary/ph03.png" alt="Aコース"><img class="sp" src="/sp/images/anniversary/ph03.png" alt="Aコース"></figure>
                <p class="gray pc">※Aコース和洋折衷料理イメージ</p>
                <dl>
                  <dt>晴れの日を演出する<br>豪華メニュー</dt>
                  <dd><img src="/images/anniversary/price1.png" alt="お一人様 10,780円(税込)"></dd>
                </dl>
              </div>
              <p class="gray sp">※Aコース和洋折衷料理イメージ</p>
              <ul class="tag">
                <li>和食</li><li>和洋折衷</li><li>洋食</li>
              </ul>

              <ul class="reserve">
                <li><a href="https://directin.jp/?y=A6A769" target="_blank" rel="noopener">
                  <img class="pc" src="/images/anniversary/btn_lunch.jpg" alt="【ご昼食】予約する">
                  <img class="sp" src="/sp/images/anniversary/btn_lunch.jpg" alt="【ご昼食】予約する">
                </a></li>
                <li><a href="https://directin.jp/?y=A6A7D7" target="_blank" rel="noopener">
                  <img class="pc" src="/images/anniversary/btn_dinner.jpg" alt="【ご夕食】予約する">
                  <img class="sp" src="/sp/images/anniversary/btn_dinner.jpg" alt="【ご夕食】予約する">
                </a></li>
              </ul>
            </li>
            <li>
              <div class="course-icon">
                <img class="pc" src="/images/anniversary/icon-b.png" alt="Bコース">
                <img class="sp" src="/sp/images/anniversary/courseB.png" alt="Bコース">
              </div>
              <div class="main-wrap">
                <figure><img class="pc" src="/images/anniversary/ph04.png" alt="Bコース"><img class="sp" src="/sp/images/anniversary/ph04.png" alt="Bコース"></figure>
                <p class="gray pc">※Bコース和食イメージ</p>
                <dl>
                  <dt>地元食材にこだわった<br>本格お祝いメニュー</dt>
                  <dd><img src="/images/anniversary/price2.png" alt="お一人様 8,580円(税込)"></dd>
                </dl>
              </div>
              <p class="gray sp">※Bコース和食イメージ</p>
              <ul class="tag">
                <li>和食</li><li>和洋折衷</li><li>洋食</li>
              </ul>

              <ul class="reserve">
                <li><a href="https://directin.jp/?y=A6A779" target="_blank" rel="noopener">
                  <img class="pc" src="/images/anniversary/btn_lunch.jpg" alt="【ご昼食】予約する">
                  <img class="sp" src="/sp/images/anniversary/btn_lunch.jpg" alt="【ご昼食】予約する">
                </a></li>
                <li><a href="https://directin.jp/?y=A6A7H7" target="_blank" rel="noopener">
                  <img class="pc" src="/images/anniversary/btn_dinner.jpg" alt="【ご夕食】予約する">
                  <img class="sp" src="/sp/images/anniversary/btn_dinner.jpg" alt="【ご夕食】予約する">
                </a></li>
              </ul>
            </li>
            <li>
              <div class="course-icon">
                <img class="pc" src="/images/anniversary/icon-c.png" alt="Cコース">
                <img class="sp" src="/sp/images/anniversary/courseC.png" alt="Cコース">
              </div>
              <div class="main-wrap">
                <figure><img class="pc" src="/images/anniversary/ph05.png" alt="Cコース"><img class="sp" src="/sp/images/anniversary/ph05.png" alt="Cコース"></figure>
                <p class="gray pc">※Cコース洋食イメージ</p>
                <dl>
                  <dt>お二人の晴れの日を彩る<br>お祝いメニュー</dt>
                  <dd><img src="/images/anniversary/price3.png" alt="お一人様 6,930円(税込)"></dd>
                </dl>
              </div>
              <p class="gray sp">※Cコース洋食イメージ</p>
              <ul class="tag">
                <li>和食</li><li>和洋折衷</li><li>洋食</li>
              </ul>

              <ul class="reserve">
                <li><a href="https://directin.jp/?y=A6A7B9" target="_blank" rel="noopener">
                  <img class="pc" src="/images/anniversary/btn_lunch.jpg" alt="【ご昼食】予約する">
                  <img class="sp" src="/sp/images/anniversary/btn_lunch.jpg" alt="【ご昼食】予約する">
                </a></li>
                <li><a href="https://directin.jp/?y=A6A7K7" target="_blank" rel="noopener">
                  <img class="pc" src="/images/anniversary/btn_dinner.jpg" alt="【ご夕食】予約する">
                  <img class="sp" src="/sp/images/anniversary/btn_dinner.jpg" alt="【ご夕食】予約する">
                </a></li>
              </ul>
            </li>
          </ul>

          <div class="more-info">
            <dl>
              <dt>各コース、デザートにてお祝いのメッセージを<br class="pc">15文字程度でご用意いたします。</dt>
              <dd><a href="https://www.concorde.co.jp/recommend/post-21.php"><img class="pc" src="/images/anniversary/btn01.jpg" alt="詳しいメニュー内容はこちら"><img class="sp" src="/sp/images/anniversary/btn01.jpg" alt="詳しいメニュー内容はこちら"></a></dd>
            </dl>
          </div>

          <!-- <div class="link-btn"><a href="https://form.kintoneapp.com/public/form/show/62866f231069de168bcf14ea66e0e90a6fc443d9d11a32af9b9a2c60a3e119ab" target="_blank" rel="noopener"><img class="pc" src="/images/anniversary/btn02.jpg" alt="ご予約お申し込みはこちら"><img class="sp" src="/sp/images/anniversary/btn02.jpg" alt="ご予約お申し込みはこちら"></a></div> -->

        </div>

<!-- お食い初め -->
        <div class="box plan02">
          <div class="info cf">
            <h3 class="sp"><img src="/sp/images/anniversary/plan02_tl.png" alt="お食い初めプラン"></h3>
            <div class="ph">
              <img class="pc" src="/images/anniversary/plan02_ph.png" alt="">
              <img class="sp" src="/sp/images/anniversary/plan02_ph.png" alt="">
            </div>
            <div class="textWrap">
              <h3 class="pc"><img src="/images/anniversary/plan02_tl.png" alt="お食い初めプラン"></h3>
              <p>お子様の健やかな成長を祝って、節目の一日は堂満のお祝い会席でお祝いしませんか。<br>プラン特典として、ホテルパティシエ特製ケーキのご用意と記念のスナップ写真をお撮り致します。<br><br>≪お食い初め膳≫　3,300円（税込）<br>[内容] 焼き鯛/赤飯/吸物/煮物など</p>
              <p class="att">※ プランとは別途お申込み</p>
              <ul class="list">
                <li>・歯固めの石をご用意(持ち込みもOK) </li>
                <li>・お食いぞめの進め方をスタッフがご説明</li>
                <li>・袴ロンパースの無料貸出(事前予約　数に限りあり) </li>
              </ul>
              <p>詳しくはプランページをご覧ください。</p>
              <a href="https://www.concorde.co.jp/recommend/post-19.php" class="btn"><img class="pc" src="/images/anniversary/btn_plan.jpg" alt="プランを詳しくみる"><img class="sp" src="/sp/images/anniversary/btn_plan.jpg" alt="プランを詳しくみる"></a>
            </div>
          </div>
        
          <ul class="course-list">
            <li>
              <div class="course-icon">
                <img class="pc" src="/images/anniversary/icon-a.png" alt="Aコース">
                <img class="sp" src="/sp/images/anniversary/courseA.png" alt="Aコース">
              </div>
              <div class="main-wrap">
                <figure><img class="pc" src="/images/anniversary/ph03.png" alt="Aコース"><img class="sp" src="/sp/images/anniversary/ph03.png" alt="Aコース"></figure>
                <p class="gray pc">※Aコース和洋折衷料理イメージ</p>
                <dl>
                  <dt>晴れの日を演出する<br>豪華メニュー</dt>
                  <dd><img src="/images/anniversary/price1.png" alt="お一人様 10,780円(税込)"></dd>
                </dl>
              </div>
              <p class="gray sp">※Aコース和洋折衷料理イメージ</p>
              <ul class="tag">
                <li>和食</li><li>和洋折衷</li><li>洋食</li>
              </ul>

              <ul class="reserve">
                <li><a href="https://directin.jp/?y=A6A823" target="_blank" rel="noopener">
                  <img class="pc" src="/images/anniversary/btn_lunch.jpg" alt="【ご昼食】予約する">
                  <img class="sp" src="/sp/images/anniversary/btn_lunch.jpg" alt="【ご昼食】予約する">
                </a></li>
                <li><a href="https://directin.jp/?y=A6A880" target="_blank" rel="noopener">
                  <img class="pc" src="/images/anniversary/btn_dinner.jpg" alt="【ご夕食】予約する">
                  <img class="sp" src="/sp/images/anniversary/btn_dinner.jpg" alt="【ご夕食】予約する">
                </a></li>
              </ul>
            </li>
            <li>
              <div class="course-icon">
                <img class="pc" src="/images/anniversary/icon-b.png" alt="Bコース">
                <img class="sp" src="/sp/images/anniversary/courseB.png" alt="Bコース">
              </div>
              <div class="main-wrap">
                <figure><img class="pc" src="/images/anniversary/ph04.png" alt="Bコース"><img class="sp" src="/sp/images/anniversary/ph04.png" alt="Bコース"></figure>
                <p class="gray pc">※Bコース和食イメージ</p>
                <dl>
                  <dt>地元食材にこだわった<br>本格お祝いメニュー</dt>
                  <dd><img src="/images/anniversary/price2.png" alt="お一人様 8,580円(税込)"></dd>
                </dl>
              </div>
              <p class="gray sp">※Bコース和食イメージ</p>
              <ul class="tag">
                <li>和食</li><li>和洋折衷</li><li>洋食</li>
              </ul>

              <ul class="reserve">
                <li><a href="https://directin.jp/?y=A6A843" target="_blank" rel="noopener">
                  <img class="pc" src="/images/anniversary/btn_lunch.jpg" alt="【ご昼食】予約する">
                  <img class="sp" src="/sp/images/anniversary/btn_lunch.jpg" alt="【ご昼食】予約する">
                </a></li>
                <li><a href="https://directin.jp/?y=A6A890" target="_blank" rel="noopener">
                  <img class="pc" src="/images/anniversary/btn_dinner.jpg" alt="【ご夕食】予約する">
                  <img class="sp" src="/sp/images/anniversary/btn_dinner.jpg" alt="【ご夕食】予約する">
                </a></li>
              </ul>
            </li>
            <li>
              <div class="course-icon">
                <img class="pc" src="/images/anniversary/icon-c.png" alt="Cコース">
                <img class="sp" src="/sp/images/anniversary/courseC.png" alt="Cコース">
              </div>
              <div class="main-wrap">
                <figure><img class="pc" src="/images/anniversary/ph05.png" alt="Cコース"><img class="sp" src="/sp/images/anniversary/ph05.png" alt="Cコース"></figure>
                <p class="gray pc">※Cコース洋食イメージ</p>
                <dl>
                  <dt>お二人の晴れの日を彩る<br>お祝いメニュー</dt>
                  <dd><img src="/images/anniversary/price3.png" alt="お一人様 6,930円(税込)"></dd>
                </dl>
              </div>
              <p class="gray sp">※Cコース洋食イメージ</p>
              <ul class="tag">
                <li>和食</li><li>和洋折衷</li><li>洋食</li>
              </ul>

              <ul class="reserve">
                <li><a href="https://directin.jp/?y=A6A860" target="_blank" rel="noopener">
                  <img class="pc" src="/images/anniversary/btn_lunch.jpg" alt="【ご昼食】予約する">
                  <img class="sp" src="/sp/images/anniversary/btn_lunch.jpg" alt="【ご昼食】予約する">
                </a></li>
                <li><a href="https://directin.jp/?y=A6A8A0" target="_blank" rel="noopener">
                  <img class="pc" src="/images/anniversary/btn_dinner.jpg" alt="【ご夕食】予約する">
                  <img class="sp" src="/sp/images/anniversary/btn_dinner.jpg" alt="【ご夕食】予約する">
                </a></li>
              </ul>
            </li>
          </ul>

          <div class="more-info">
            <dl>
              <dt>各コース、デザートにてお祝いのメッセージを<br class="pc">15文字程度でご用意いたします。</dt>
              <dd><a href="https://www.concorde.co.jp/recommend/post-19.php"><img class="pc" src="/images/anniversary/btn01.jpg" alt="詳しいメニュー内容はこちら"><img class="sp" src="/sp/images/anniversary/btn01.jpg" alt="詳しいメニュー内容はこちら"></a></dd>
            </dl>
          </div>

          <!-- <div class="link-btn"><a href="https://form.kintoneapp.com/public/form/show/62866f231069de168bcf14ea66e0e90a6fc443d9d11a32af9b9a2c60a3e119ab" target="_blank" rel="noopener"><img class="pc" src="/images/anniversary/btn02.jpg" alt="ご予約お申し込みはこちら"><img class="sp" src="/sp/images/anniversary/btn02.jpg" alt="ご予約お申し込みはこちら"></a></div> -->

        </div>

<!-- 人生の節目 -->
        <div class="box plan04">
          <div class="info cf">
            <h3 class="sp"><img src="/sp/images/anniversary/plan04_tl.png" alt="人生の節目プラン"></h3>
            <div class="ph">
              <img class="pc" src="/images/anniversary/plan04_ph.png" alt="">
              <img class="sp" src="/sp/images/anniversary/plan04_ph.png" alt="">
            </div>
            <div class="textWrap">
              <h3 class="pc"><img src="/images/anniversary/plan04_tl.png" alt="人生の節目プラン"></h3>
              <p>還暦(満60歳)、古希(70歳)、喜寿(77歳)などの長寿のお祝いや、就職祝い、定年退職など、人生の節目のお祝いに。<br>プラン特典として、ホテルパティシエ特製ケーキのご用意と記念のスナップ写真をお撮り致します。</p>
              <a href="https://www.concorde.co.jp/recommend/post-22.php" class="btn"><img class="pc" src="/images/anniversary/btn_plan.jpg" alt="プランを詳しくみる"><img class="sp" src="/sp/images/anniversary/btn_plan.jpg" alt="プランを詳しくみる"></a>
            </div>
          </div>
        
          <ul class="course-list">
            <li>
              <div class="course-icon">
                <img class="pc" src="/images/anniversary/icon-a.png" alt="Aコース">
                <img class="sp" src="/sp/images/anniversary/courseA.png" alt="Aコース">
              </div>
              <div class="main-wrap">
                <figure><img class="pc" src="/images/anniversary/ph03.png" alt="Aコース"><img class="sp" src="/sp/images/anniversary/ph03.png" alt="Aコース"></figure>
                <p class="gray pc">※Aコース和洋折衷料理イメージ</p>
                <dl>
                  <dt>晴れの日を演出する<br>豪華メニュー</dt>
                  <dd><img src="/images/anniversary/price1.png" alt="お一人様 10,780円(税込)"></dd>
                </dl>
              </div>
              <p class="gray sp">※Aコース和洋折衷料理イメージ</p>
              <ul class="tag">
                <li>和食</li><li>和洋折衷</li><li>洋食</li>
              </ul>

              <ul class="reserve">
                <li><a href="https://directin.jp/?y=A6A7R5" target="_blank" rel="noopener">
                  <img class="pc" src="/images/anniversary/btn_lunch.jpg" alt="【ご昼食】予約する">
                  <img class="sp" src="/sp/images/anniversary/btn_lunch.jpg" alt="【ご昼食】予約する">
                </a></li>
                <li><a href="https://directin.jp/?y=A6A7X3" target="_blank" rel="noopener">
                  <img class="pc" src="/images/anniversary/btn_dinner.jpg" alt="【ご夕食】予約する">
                  <img class="sp" src="/sp/images/anniversary/btn_dinner.jpg" alt="【ご夕食】予約する">
                </a></li>
              </ul>
            </li>
            <li>
              <div class="course-icon">
                <img class="pc" src="/images/anniversary/icon-b.png" alt="Bコース">
                <img class="sp" src="/sp/images/anniversary/courseB.png" alt="Bコース">
              </div>
              <div class="main-wrap">
                <figure><img class="pc" src="/images/anniversary/ph04.png" alt="Bコース"><img class="sp" src="/sp/images/anniversary/ph04.png" alt="Bコース"></figure>
                <p class="gray pc">※Bコース和食イメージ</p>
                <dl>
                  <dt>地元食材にこだわった<br>本格お祝いメニュー</dt>
                  <dd><img src="/images/anniversary/price2.png" alt="お一人様 8,580円(税込)"></dd>
                </dl>
              </div>
              <p class="gray sp">※Bコース和食イメージ</p>
              <ul class="tag">
                <li>和食</li><li>和洋折衷</li><li>洋食</li>
              </ul>

              <ul class="reserve">
                <li><a href="https://directin.jp/?y=A6A7U5" target="_blank" rel="noopener">
                  <img class="pc" src="/images/anniversary/btn_lunch.jpg" alt="【ご昼食】予約する">
                  <img class="sp" src="/sp/images/anniversary/btn_lunch.jpg" alt="【ご昼食】予約する">
                </a></li>
                <li><a href="https://directin.jp/?y=A6A7Z3" target="_blank" rel="noopener">
                  <img class="pc" src="/images/anniversary/btn_dinner.jpg" alt="【ご夕食】予約する">
                  <img class="sp" src="/sp/images/anniversary/btn_dinner.jpg" alt="【ご夕食】予約する">
                </a></li>
              </ul>
            </li>
            <li>
              <div class="course-icon">
                <img class="pc" src="/images/anniversary/icon-c.png" alt="Cコース">
                <img class="sp" src="/sp/images/anniversary/courseC.png" alt="Cコース">
              </div>
              <div class="main-wrap">
                <figure><img class="pc" src="/images/anniversary/ph05.png" alt="Cコース"><img class="sp" src="/sp/images/anniversary/ph05.png" alt="Cコース"></figure>
                <p class="gray pc">※Cコース洋食イメージ</p>
                <dl>
                  <dt>お二人の晴れの日を彩る<br>お祝いメニュー</dt>
                  <dd><img src="/images/anniversary/price3.png" alt="お一人様 6,930円(税込)"></dd>
                </dl>
              </div>
              <p class="gray sp">※Cコース洋食イメージ</p>
              <ul class="tag">
                <li>和食</li><li>和洋折衷</li><li>洋食</li>
              </ul>

              <ul class="reserve">
                <li><a href="https://directin.jp/?y=A6A7V5" target="_blank" rel="noopener">
                  <img class="pc" src="/images/anniversary/btn_lunch.jpg" alt="【ご昼食】予約する">
                  <img class="sp" src="/sp/images/anniversary/btn_lunch.jpg" alt="【ご昼食】予約する">
                </a></li>
                <li><a href="https://directin.jp/?y=A6A813" target="_blank" rel="noopener">
                  <img class="pc" src="/images/anniversary/btn_dinner.jpg" alt="【ご夕食】予約する">
                  <img class="sp" src="/sp/images/anniversary/btn_dinner.jpg" alt="【ご夕食】予約する">
                </a></li>
              </ul>
            </li>
          </ul>

          <div class="more-info">
            <dl>
              <dt>各コース、デザートにてお祝いのメッセージを<br class="pc">15文字程度でご用意いたします。</dt>
              <dd><a href="https://www.concorde.co.jp/recommend/post-22.php"><img class="pc" src="/images/anniversary/btn01.jpg" alt="詳しいメニュー内容はこちら"><img class="sp" src="/sp/images/anniversary/btn01.jpg" alt="詳しいメニュー内容はこちら"></a></dd>
            </dl>
          </div>

          <!-- <div class="link-btn"><a href="https://form.kintoneapp.com/public/form/show/62866f231069de168bcf14ea66e0e90a6fc443d9d11a32af9b9a2c60a3e119ab" target="_blank" rel="noopener"><img class="pc" src="/images/anniversary/btn02.jpg" alt="ご予約お申し込みはこちら"><img class="sp" src="/sp/images/anniversary/btn02.jpg" alt="ご予約お申し込みはこちら"></a></div> -->

        </div>

<!-- 七五三 -->
        <div class="box plan03">
          <div class="info cf">
            <h3 class="sp"><img src="/sp/images/anniversary/plan03_tl.png" alt="七五三お祝いプラン"></h3>
            <div class="ph">
              <img class="pc" src="/images/anniversary/plan03_ph.png" alt="">
              <img class="sp" src="/sp/images/anniversary/plan03_ph.png" alt="">
            </div>
            <div class="textWrap">
              <h3 class="pc"><img src="/images/anniversary/plan03_tl.png" alt="七五三お祝いプラン"></h3>
              <p>お子様の健やかな成長を祝って、節目の一日は堂満のお祝い会席でお祝いしませんか。お子様のお料理も充実してご用意しております。<br>プラン特典として、ホテルパティシエ特製ケーキのご用意と記念のスナップ写真をお撮り致します。</p>
              <a href="https://www.concorde.co.jp/recommend/post-20.php" class="btn"><img class="pc" src="/images/anniversary/btn_plan.jpg" alt="プランを詳しくみる"><img class="sp" src="/sp/images/anniversary/btn_plan.jpg" alt="プランを詳しくみる"></a>
            </div>
          </div>

          <ul class="course-list">
            <li>
              <div class="course-icon">
                <img class="pc" src="/images/anniversary/icon-a.png" alt="Aコース">
                <img class="sp" src="/sp/images/anniversary/courseA.png" alt="Aコース">
              </div>
              <div class="main-wrap">
                <figure><img class="pc" src="/images/anniversary/ph03.png" alt="Aコース"><img class="sp" src="/sp/images/anniversary/ph03.png" alt="Aコース"></figure>
                <p class="gray pc">※Aコース和洋折衷料理イメージ</p>
                <dl>
                  <dt>晴れの日を演出する<br>豪華メニュー</dt>
                  <dd><img src="/images/anniversary/price1.png" alt="お一人様 10,780円(税込)"></dd>
                </dl>
              </div>
              <p class="gray sp">※Aコース和洋折衷料理イメージ</p>
              <ul class="tag">
                <li>和食</li><li>和洋折衷</li><li>洋食</li>
              </ul>
              <ul class="reserve">
                <li><a href="https://directin.jp/?y=A69EN7" target="_blank" rel="noopener">
                  <img class="pc" src="/images/anniversary/btn_lunch.jpg" alt="【ご昼食】予約する">
                  <img class="sp" src="/sp/images/anniversary/btn_lunch.jpg" alt="【ご昼食】予約する">
                </a></li>
                <li><a href="https://directin.jp/?y=A6A0B1" target="_blank" rel="noopener">
                  <img class="pc" src="/images/anniversary/btn_dinner.jpg" alt="【ご夕食】予約する">
                  <img class="sp" src="/sp/images/anniversary/btn_dinner.jpg" alt="【ご夕食】予約する">
                </a></li>
              </ul>
            </li>
            <li>
              <div class="course-icon">
                <img class="pc" src="/images/anniversary/icon-b.png" alt="Bコース">
                <img class="sp" src="/sp/images/anniversary/courseB.png" alt="Bコース">
              </div>
              <div class="main-wrap">
                <figure><img class="pc" src="/images/anniversary/ph04.png" alt="Bコース"><img class="sp" src="/sp/images/anniversary/ph04.png" alt="Bコース"></figure>
                <p class="gray pc">※Bコース和食イメージ</p>
                <dl>
                  <dt>地元食材にこだわった<br>本格お祝いメニュー</dt>
                  <dd><img src="/images/anniversary/price2.png" alt="お一人様 8,580円(税込)"></dd>
                </dl>
              </div>
              <p class="gray sp">※Bコース和食イメージ</p>
              <ul class="tag">
                <li>和食</li><li>和洋折衷</li><li>洋食</li>
              </ul>
              <ul class="reserve">
                <li><a href="https://directin.jp/?y=A69ZQ6" target="_blank" rel="noopener">
                  <img class="pc" src="/images/anniversary/btn_lunch.jpg" alt="【ご昼食】予約する">
                  <img class="sp" src="/sp/images/anniversary/btn_lunch.jpg" alt="【ご昼食】予約する">
                </a></li>
                <li><a href="https://directin.jp/?y=A6A0F9" target="_blank" rel="noopener">
                  <img class="pc" src="/images/anniversary/btn_dinner.jpg" alt="【ご夕食】予約する">
                  <img class="sp" src="/sp/images/anniversary/btn_dinner.jpg" alt="【ご夕食】予約する">
                </a></li>
              </ul>
            </li>
            <li>
              <div class="course-icon">
                <img class="pc" src="/images/anniversary/icon-c.png" alt="Cコース">
                <img class="sp" src="/sp/images/anniversary/courseC.png" alt="Cコース">
              </div>
              <div class="main-wrap">
                <figure><img class="pc" src="/images/anniversary/ph05.png" alt="Cコース"><img class="sp" src="/sp/images/anniversary/ph05.png" alt="Cコース"></figure>
                <p class="gray pc">※Cコース洋食イメージ</p>
                <dl>
                  <dt>お二人の晴れの日を彩る<br>お祝いメニュー</dt>
                  <dd><img src="/images/anniversary/price3.png" alt="お一人様 6,930円(税込)"></dd>
                </dl>
              </div>
              <p class="gray sp">※Cコース洋食イメージ</p>
              <ul class="tag">
                <li>和食</li><li>和洋折衷</li><li>洋食</li>
              </ul>
              <ul class="reserve">
                <li><a href="https://directin.jp/?y=A69ZR6" target="_blank" rel="noopener">
                  <img class="pc" src="/images/anniversary/btn_lunch.jpg" alt="【ご昼食】予約する">
                  <img class="sp" src="/sp/images/anniversary/btn_lunch.jpg" alt="【ご昼食】予約する">
                </a></li>
                <li><a href="https://directin.jp/?y=A6A0G9" target="_blank" rel="noopener">
                  <img class="pc" src="/images/anniversary/btn_dinner.jpg" alt="【ご夕食】予約する">
                  <img class="sp" src="/sp/images/anniversary/btn_dinner.jpg" alt="【ご夕食】予約する">
                </a></li>
              </ul>
            </li>
          </ul>

          <div class="more-info">
            <dl>
              <dt>各コース、デザートにてお祝いのメッセージを<br class="pc">15文字程度でご用意いたします。</dt>
              <dd><a href="https://www.concorde.co.jp/recommend/post-20.php"><img class="pc" src="/images/anniversary/btn01.jpg" alt="詳しいメニュー内容はこちら"><img class="sp" src="/sp/images/anniversary/btn01.jpg" alt="詳しいメニュー内容はこちら"></a></dd>
            </dl>
          </div>
<!--
          <div class="link-btn"><a href="https://form.kintoneapp.com/public/form/show/62866f231069de168bcf14ea66e0e90a6fc443d9d11a32af9b9a2c60a3e119ab" target="_blank"><img class="pc" src="/images/anniversary/btn02.jpg" alt="ご予約お申し込みはこちら"><img class="sp" src="/sp/images/anniversary/btn02.jpg" alt="ご予約お申し込みはこちら"></a></div>
-->
        </div>

<!--     
      <div class="box plan03">
          <div class="info cf">
            <h3 class="sp"><img src="/sp/images/anniversary/plan06_tl.png" alt="春の門出プラン"></h3>
            <div class="ph">
              <img class="pc" src="/images/anniversary/plan06_ph.png" alt="">
              <img class="sp" src="/sp/images/anniversary/plan06_ph.png" alt="">
            </div>
            <div class="textWrap">
              <h3 class="pc"><img src="/images/anniversary/plan06_tl.png" alt="春の門出プラン"></h3>
              <p>春は入学式、入園式、就職など新たな門出の季節です。<br>お子様、お孫様の大切なハレの日は少し豪華に、"出世城"浜松城の隣のホテルコンコルド浜松でしっかりとしたお祝いをしませんか？お子様のお料理も充実してご用意しております</p>
              <a href="https://www.concorde.co.jp/recommend/spring-oiwai-plan.php" class="btn"><img class="pc" src="/images/anniversary/btn_plan.jpg" alt="プランを詳しくみる"><img class="sp" src="/sp/images/anniversary/btn_plan.jpg" alt="プランを詳しくみる"></a>
            </div>
          </div>
          <ul>
            <li class="planA">
              <div class="ph pc"><img src="/images/anniversary/plan03_A.png" alt=""></div>
              <div class="text cf pc">
                <p class="tag">鯛の姿造り付</p><p class="tag">お祝いケーキ付</p>
                <p class="price"><img src="/images/anniversary/plan01_A_price.png" alt="お一人様 10,780円(税込)"></p>
                <p class="info">鯛の姿造りで豪華かつ華やかにお祝い頂けます。<br>「和食」「和洋折衷」各コースをお選び頂けます。</p>
                <p class="att">※ 12/28〜1/5,8/13〜8/15は引受除外日です。</p>
              </div>
              <div class="course sp"><img src="/sp/images/anniversary/courseA.png" alt="Aコース"></div>
              <div class="wrap sp">
                <div class="ph"><img src="/sp/images/anniversary/plan03_A.png" alt=""></div>
                <div class="text_wrap">
                  <p class="tag">鯛の姿造り付</p><p class="tag end">お祝いケーキ付</p>
                  <p class="price"><img src="/sp/images/anniversary/plan01_A_price.png" alt="お一人様 10,780円(税込)"></p>
                </div>
              </div>
              <div class="text sp">
                <p class="info">鯛の姿造りで豪華かつ華やかにお祝い頂けます。<br>「和食」「和洋折衷」各コースをお選び頂けます。</p>
                <p class="att">※ 12/28〜1/5,8/13〜8/15は引受除外日です。</p>
              </div>
              <div class="btns">
                <ul>
                  <li><a href="https://www.hotpepper.jp/strJ001223034/course_cnod34/hpds/" target="_blank">
                    <img class="pc" src="/images/anniversary/btn_A1.jpg" alt="Aコース(和食)を予約する">
                    <img class="sp" src="/sp/images/anniversary/btn_A1.jpg" alt="Aコース(和食)を予約する">
                  </a></li>
                  <li><a href="https://www.hotpepper.jp/strJ001223034/course_cnod35/hpds/" target="_blank">
                    <img class="pc" src="/images/anniversary/btn_A2.jpg" alt="Aコース(和洋折衷)を予約する">
                    <img class="sp" src="/sp/images/anniversary/btn_A2.jpg" alt="Aコース(和洋折衷)を予約する">
                  </a></li>
                </ul>
              </div>
            </li>
            <li class="planB">
              <div class="ph pc"><img src="/images/anniversary/plan03_B.png" alt=""></div>
              <div class="text cf pc">
                <p class="tag">お祝いケーキ付</p>
                <p class="price"><img src="/images/anniversary/plan01_B_price.png" alt="お一人様 8,580円(税込)"></p>
                <p class="info">地元食材にこだわった、本格お祝い会席です。「和食」「和洋折衷」各コースをお選び頂けます。</p>
              </div>
              <div class="course sp"><img src="/sp/images/anniversary/courseB.png" alt="Bコース"></div>
              <div class="wrap sp">
                <div class="ph"><img src="/sp/images/anniversary/plan03_B.png" alt=""></div>
                <div class="text_wrap">
                  <p class="tag">お祝いケーキ付</p>
                  <p class="price"><img src="/sp/images/anniversary/plan01_B_price.png" alt="お一人様 8,580円(税込)"></p>
                </div>
              </div>
              <div class="text sp">
                <p class="info">地元食材にこだわった、本格お祝い会席です。「和食」「和洋折衷」各コースをお選び頂けます。</p>
              </div>
              <div class="btns">
                <ul>
                  <li><a href="https://www.hotpepper.jp/strJ001223034/course_cnod36/hpds/" target="_blank">
                    <img class="pc" src="/images/anniversary/btn_B1.jpg" alt="Bコース(和食)を予約する">
                    <img class="sp" src="/sp/images/anniversary/btn_B1.jpg" alt="Bコース(和食)を予約する">
                  </a></li>
                  <li><a href="https://www.hotpepper.jp/strJ001223034/course_cnod37/hpds/" target="_blank">
                    <img class="pc" src="/images/anniversary/btn_B2.jpg" alt="Bコース(和洋折衷)を予約する">
                    <img class="sp" src="/sp/images/anniversary/btn_B2.jpg" alt="Bコース(和洋折衷)を予約する">
                  </a></li>
                </ul>
              </div>
            </li>
            <li class="planC">
              <div class="ph pc"><img src="/images/anniversary/plan03_C.png" alt=""></div>
              <div class="text cf pc">
                <p class="price"><img src="/images/anniversary/plan01_C_price.png" alt="お一人様 6,930円(税込)"></p>
                <p class="info">お二人の晴れの日を彩るお祝い会席です。「和食」「和洋折衷」各コースをお選び頂けます。</p>
              </div>
              <div class="course sp"><img src="/sp/images/anniversary/courseC.png" alt="Cコース"></div>
              <div class="wrap sp">
                <div class="ph"><img src="/sp/images/anniversary/plan03_C.png" alt=""></div>
                <p class="price">
                  <img src="/sp/images/anniversary/plan01_C_price.png" alt="お一人様 6,930円(税込)">
                </p>
              </div>
              <div class="text sp">
                <p class="info">お二人の晴れの日を彩るお祝い会席です。「和食」「和洋折衷」各コースをお選び頂けます。</p>
              </div>
              <div class="btns">
                <ul>
                  <li><a href="https://www.hotpepper.jp/strJ001223034/course_cnod38/hpds/" target="_blank">
                    <img class="pc" src="/images/anniversary/btn_C1.jpg" alt="Cコース(和食)を予約する">
                    <img class="sp" src="/sp/images/anniversary/btn_C1.jpg" alt="Cコース(和食)を予約する">
                  </a></li>
                  <li><a href="https://www.hotpepper.jp/strJ001223034/course_cnod39/hpds/" target="_blank">
                    <img class="pc" src="/images/anniversary/btn_C2.jpg" alt="Cコース(和洋折衷)を予約する">
                    <img class="sp" src="/sp/images/anniversary/btn_C2.jpg" alt="Cコース(和洋折衷)を予約する">
                  </a></li>
                </ul>
              </div>
            </li>
          </ul>
        </div>
        
        </div> -->
    </section>

      <section id="Bms" class="bms"><div class="inner">
        <h2>
          <img class="pc" src="/images/anniversary/bms_tl.png" alt="法要">
          <img class="sp" src="/sp/images/anniversary/bms_tl.png" alt="法要">
        </h2>

        <div class="box plan05">
          <div class="info cf">
            <h3 class="sp"><img src="/sp/images/anniversary/plan05_tl.png" alt="法要・法事プラン"></h3>
            <div class="ph">
              <img class="pc" src="/images/anniversary/plan05_ph.png" alt="">
              <img class="sp" src="/sp/images/anniversary/plan05_ph.png" alt="">
            </div>
            <div class="textWrap">
              <h3 class="pc"><img src="/images/anniversary/plan05_tl.png" alt="法要・法事プラン"></h3>
              <p>初七日、四十九日、一周忌、三回忌、七回忌、十三回忌。<br>ご家族やご親族、親しかった方々が故人の人柄を偲び、在りし日の想い出を語りあって頂けるように、心を込めたお料理とおもてなしをご提供致します。</p>
              <!-- <a href="" class="btn"><img  class="pc"src="/images/anniversary/btn_plan.jpg" alt="プランを詳しくみる"></a> -->
            </div>
          </div>
          <ul>
            <li class="planA">
              <div class="ph pc"><img src="/images/anniversary/plan05_A.png" alt=""></div>
              <div class="text cf pc">
                <p class="price"><img src="/images/anniversary/plan05_A_price.png" alt="お一人様  9,680円(税込)"></p>
              </div>
              <div class="course sp"><img src="/sp/images/anniversary/courseA_bms.png" alt="Aコース"></div>
              <div class="wrap sp">
                <div class="ph"><img src="/sp/images/anniversary/plan05_A.png" alt=""></div>
                <div class="text_wrap">
                  <p class="price"><img src="/sp/images/anniversary/plan05_A_price.png" alt="お一人様  9,680円(税込)"></p>
                </div>
              </div>
              <div class="btns">
                <ul>
                  <li><a href="https://directin.jp/?y=A6A8B0" target="_blank" rel="noopener">
                  <img class="pc" src="/images/anniversary/btn_lunch2.jpg" alt="【ご昼食】予約する">
                  <img class="sp" src="/sp/images/anniversary/btn_lunch2.jpg" alt="【ご昼食】予約する">
                </a></li>

                <li><a href="https://directin.jp/?y=A6A8J8" target="_blank" rel="noopener">
                  <img class="pc" src="/images/anniversary/btn_dinner2.jpg" alt="【ご夕食】予約する">
                  <img class="sp" src="/sp/images/anniversary/btn_dinner2.jpg" alt="【ご夕食】予約する">
                </a></li>

                </ul>
              </div>
            </li>
            <li class="planB">
              <div class="ph pc"><img src="/images/anniversary/plan05_B.png" alt=""></div>
              <div class="text cf pc">
                <p class="price"><img src="/images/anniversary/plan05_B_price.png" alt="お一人様  7,480円(税込)"></p>
              </div>
              <div class="course sp"><img src="/sp/images/anniversary/courseB_bms.png" alt="Bコース"></div>
              <div class="wrap sp">
                <div class="ph"><img src="/sp/images/anniversary/plan05_B.png" alt=""></div>
                <div class="text_wrap">
                  <p class="price"><img src="/sp/images/anniversary/plan05_B_price.png" alt="お一人様  7,480円(税込)"></p>
                </div>
              </div>
              <div class="btns">
                <ul>
                  <li><a href="https://directin.jp/?y=A6A8E0" target="_blank" rel="noopener">
                  <img class="pc" src="/images/anniversary/btn_lunch2.jpg" alt="【ご昼食】予約する">
                  <img class="sp" src="/sp/images/anniversary/btn_lunch2.jpg" alt="【ご昼食】予約する">
                </a></li>

                <li><a href="https://directin.jp/?y=A6A8K8" target="_blank" rel="noopener">
                  <img class="pc" src="/images/anniversary/btn_dinner2.jpg" alt="【ご夕食】予約する">
                  <img class="sp" src="/sp/images/anniversary/btn_dinner2.jpg" alt="【ご夕食】予約する">
                </a></li>

                </ul>
              </div>
            </li>
            <li class="planC">
              <div class="ph pc"><img src="/images/anniversary/plan05_C.png" alt=""></div>
              <div class="text cf pc">
                <p class="price"><img src="/images/anniversary/plan05_C_price.png" alt="お一人様  5,830円(税込)"></p>
              </div>
              <div class="course sp"><img src="/sp/images/anniversary/courseC_bms.png" alt="Cコース"></div>
              <div class="wrap sp">
                <div class="ph"><img src="/sp/images/anniversary/plan05_C.png" alt=""></div>
                <div class="text_wrap">
                  <p class="price"><img src="/sp/images/anniversary/plan05_C_price.png" alt="お一人様  5,830円(税込)"></p>
                </div>
              </div>
              <div class="btns">
                <ul>
                  <li><a href="https://directin.jp/?y=A6A8H8" target="_blank" rel="noopener">
                  <img class="pc" src="/images/anniversary/btn_lunch2.jpg" alt="【ご昼食】予約する">
                  <img class="sp" src="/sp/images/anniversary/btn_lunch2.jpg" alt="【ご昼食】予約する">
                </a></li>

                <li><a href="https://directin.jp/?y=A6A8N8" target="_blank" rel="noopener">
                  <img class="pc" src="/images/anniversary/btn_dinner2.jpg" alt="【ご夕食】予約する">
                  <img class="sp" src="/sp/images/anniversary/btn_dinner2.jpg" alt="【ご夕食】予約する">
                </a></li>

                </ul>
              </div>
            </li>
          </ul>
        </div>

        <div class="box bus">
          <div class="bg">
            <img class="pc" src="/images/anniversary/bms_bus.png" alt="法要・法事プラン特別特典 無料送迎バスのご案内">
            <img class="sp" src="/sp/images/anniversary/bms_bus.png" alt="法要・法事プラン特別特典 無料送迎バスのご案内">
          </div>
          <p>大人15名様以上で片道40km圏内送迎バスを無料にてお手配致します。<br class="pc">その他の送迎は相談に応じますので、お気軽にお問い合わせください。</p>
          <div class="ph">
            <img class="pc" src="/images/anniversary/bms_parking.png" alt="立体駐車場200台完備 (駐車券のサービスもございます)">
            <img class="sp" src="/sp/images/anniversary/bms_parking.png" alt="立体駐車場200台完備 (駐車券のサービスもございます)">
          </div>
        </div>
      </div></section>

      <section class="contact"><div class="inner">
        <h2>
          <img class="pc" src="/images/anniversary/contact_tl.png" alt="お問い合せ">
          <img class="sp" src="/sp/images/anniversary/contact_tl.png" alt="お問い合せ">
        </h2>
        <ul>
          <li class="tel">
            <a href="tel:053487-0990">
              <img class="pc" src="/images/anniversary/contact_tel.png" alt="tel: 053-487-0990">
              <img class="sp" src="/sp/images/anniversary/contact_tel.png" alt="tel: 053-487-0990">
            </a>
            <p class="time">
              <img class="pc" src="/images/anniversary/contact_time.png" alt="">
              <img class="sp" src="/sp/images/anniversary/contact_time.png" alt="">
            </p>
          </li>
          <li class="mail"><a href="/inquiry/">
            <img class="pc" src="/images/anniversary/contact_mail.jpg" alt="お問い合わせフォーム">
            <img class="sp" src="/sp/images/anniversary/contact_mail.jpg" alt="お問い合わせフォーム">
          </a></li>
        </ul>
      </div></section>

      <div class="copy">
        <small>&copy; HOTEL CONCORDE HAMAMATSU</small>
      </div>
      <div id="pageTop" class="pagetop">
        <a href="#AllBox">
          <img class="pc" src="/images/anniversary/pageTop.png" alt="トップへ戻る">
          <img class="sp" src="/sp/images/anniversary/pageTop.png" alt="トップへ戻る">
        </a>
      </div>
    </main>

    <div id="fixNav" class="sp">
      <ul>
        <li><a href="#Aus"><img src="/sp/images/anniversary/fix_btn_aus.jpg" alt=お祝い""></a></li>
        <li><a href="#Bms"><img src="/sp/images/anniversary/fix_btn_bms.jpg" alt="法要"></a></li>
      </ul>
    </div>

    <div id="SideBar">
      <div class="menu_btn">
        <a class="menu-trigger" href="javascript:void(0)">
            <span></span><span></span><span></span>
          </a>
          <p class="t incon">MENU</p>
          <p class="t2 incon">CLOSE</p>
      </div>
      <div class="navigation">
        <p class="bgcon bg01"></p>
        <p class="bgcon bg02"></p>
        <p class="bgcon bg03"></p>
        <p class="bgcon bg04"></p>
        <p class="bgcon bg05"></p>
        <p class="bgcon bg06"></p>
        <p class="bgcon bg07"></p>
        <p class="bgcon bg08"></p>
        <p class="bgcon bg09"></p>

        <div class="inner cf">
          <p class="logo sp"><a href="/">
            <img src="/sp/images/common/logo.png" alt="" class="sp">
          </a></p>

          <div class="gn">
            <ul>
              <li class="l01"><a href="/"><span class="s1 incon">01- </span><span class="s2 incon">HOME　</span><span class="s3">ホーム</span></a></li>
              <li class="l02"><a href="/rooms/"><span class="s1 incon">02- </span><span class="s2 incon">STAY　</span><span class="s3">ご宿泊</span></a></li>
              <li class="l03"><a href="/restaurant/"><span class="s1 incon">03- </span><span class="s2 incon">RESTAURANT　</span><span class="s3">レストラン</span></a></li>

              <li class="l09"><a href="/anniversary/"><span class="s1 incon">04- </span><span class="s2 incon">MEMORIAL　</span><span class="s3">お祝い・法要</span></a></li>

              <li class="l04"><a href="/party/"><span class="s1 incon">05- </span><span class="s2 incon">BANQUET　</span><span class="s3">会議・宴会</span></a></li>
              <li class="l05"><a href="https://concordewedding.business.site/" target="_blank" rel="noopener"><span class="s1 incon">06- </span><span class="s2 incon">WEDDING　</span><span class="s3">ウェディング</span></a></li>
              <li class="l06"><a href="/info/"><span class="s1 incon">07- </span><span class="s2 incon">FLOOR GUIDE　</span><span class="s3">ホテル案内</span></a></li>

              <li class="l08"><a href="/info/tour.php"><span class="s1 incon">08- </span><span class="s2 incon">SIGHTSEEING　</span><span class="s3">周辺案内</span></a></li>

              <li class="l07"><a href="/info/access.php"><span class="s1 incon">09- </span><span class="s2 incon">ACCESS　</span><span class="s3">アクセス</span></a></li>
            </ul>
          </div>

          <p class="btn sp"><a href="https://asp.hotel-story.ne.jp/ver3d/planlist.asp?hcod1=82190&hcod2=001&mode=seek&clrmode=true&reffrom=" target="_blank" rel="noopener"><span>ご予約・空室検索</span></a></p>

          <p class="tel sp"><a href="tel:053-487-0990"><b class="incon">053-487-0990</b></a></p>

          <div class="sn">
            <div class="rate">
              <p class="t sawa"><span>ベストレート保証</span></p>
              <p class="t2">当サイトからのご予約で最低価格を保証いたします。</p>
              <p class="btn pc"><a href="https://asp.hotel-story.ne.jp/ver3d/planlist.asp?hcod1=82190&hcod2=001&mode=seek&clrmode=true&reffrom=" target="_blank" rel="noopener">ご予約・空室検索</a></p>
            </div>

            <div class="lang2 pc cf">
              <p class="l ropa">LANGUAGE</p>
              <p class="r ropa"><a href="https://hpdsp.jp/hotel-concorde/en/" target="_blank" class="ropa" rel="noopener">English</a>&nbsp;&nbsp;/&nbsp;&nbsp;<a href="https://hpdsp.jp/hotel-concorde/zh-cn/" target="_blank" class="s" rel="noopener">簡体</a>&nbsp;&nbsp;/&nbsp;&nbsp;<a href="https://hpdsp.jp/hotel-concorde/zh-tw/" target="_blank" class="s" rel="noopener">繁体</a>&nbsp;&nbsp;/&nbsp;&nbsp;<a href="https://hpdsp.jp/hotel-concorde/ko/" target="_blank" class="s" rel="noopener">한국어</a>&nbsp;&nbsp;/&nbsp;&nbsp;<a href="/" class="s">日本語</a></p>
            </div>

            <p class="inbound"><a href="/inbound/">インバウンド・訪日ツアーに最適</a></p>
            <p class="hamanako"><a href="/hamanako/">浜名湖パルパルオフィシャルホテルで<br class="sp">満喫する浜名湖観光</a></p>

            <div class="sns cf">
              <p><a href="https://www.facebook.com/concordehama/" target="_blank" rel="noopener"><img src="/images/common/fb.svg" alt="Facebook"></a></p>
              <p><a href="https://twitter.com/concordehama" target="_blank" rel="noopener"><img src="/images/common/tw.svg" alt="Twitter"></a></p>
              <p><a href="https://line.me/R/ti/p/%40pfm9518g" target="_blank" rel="noopener"><img src="/images/common/line_sns.svg" alt="LINE"></a></p>
              <p><a href="https://www.tripadvisor.jp/Hotel_Review-g303148-d582012-Reviews-Hotel_Concorde_Hamamatsu-Hamamatsu_Shizuoka_Prefecture_Tokai_Chubu.html" target="_blank" rel="noopener"><img src="/images/common/trip.svg" alt="Trip Adviser"></a></p>
            </div>


            <div class="olink pc cf">
              <ul>
                <li><a href="/info/tour.php">周辺案内</a></li>
                <li><a href="/gallery/">ギャラリー</a></li>
                <li><a href="/recommend/">おすすめ情報</a></li>
                <li><a href="/news/">お知らせ</a></li>
                <li><a href="/inquiry/">お問い合わせ</a></li>
                <li><a href="/sitemap/">サイトマッ��</a></li>
                <li><a href="/kiyaku/">各種規約</a></li>
                <li class="blank"><a href="http://www.entetsu.co.jp/kaihatu/recruit/index.html" target="_blank" rel="noopener">採用情報</a></li>
                <li class="blank"><a href="http://www.entetsu.co.jp/company/group/kanko_kaihatsu.html" target="_blank" rel="noopener">会社概要</a></li>
              </ul>
            </div>

            <div class="lang3 sp">
              <select class="select" name="month" onChange='document.location.href=this.options[this.selectedIndex].value;'>
                <option value="">LANGUAGE</option>
                <option value='https://hpdsp.jp/hotel-concorde/en/'> English </option>
                <option value='https://hpdsp.jp/hotel-concorde/zh-cn/'> 簡体 </option>
                <option value='https://hpdsp.jp/hotel-concorde/zh-tw/'> 繁体 </option>
                <option value='https://hpdsp.jp/hotel-concorde/ko/'> 한국어 </option>
                <option value='/'> 日本語 </option>
              </select>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>
  <?php include($_SERVER['DOCUMENT_ROOT']."/inc/tag/footer_tag.php");?>
  <script>
    $(function(){
      $("#SideBar .menu_btn a").click(function(){
        $("#SideBar .navigation").fadeToggle(300);
      });

      $(window).scroll(function(){
        var t = $(this).scrollTop();
        if( t > 100 ){
          $("header .logo").fadeOut();
        } else {
          $("header .logo").fadeIn();
        }
      });
    });

    window.WebFontConfig = {
      google: { families: ['Noto+Sans+JP&subset=japanese'] },
      active: function() {
        sessionStorage.fonts = true;
      }
    };

    (function() {
      var wf = document.createElement('script');
      wf.src = 'https://ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js';
      wf.type = 'text/javascript';
      wf.async = 'true';
      var s = document.getElementsByTagName('script')[0];
      s.parentNode.insertBefore(wf, s);
    })();
  </script>
</body>
</html>
