<?php
/*----------------------------------------------------------------------------------

	設定ファイル

----------------------------------------------------------------------------------*/

/* 基本設定 */

// フォームデータを受け取るメールアドレス（$mailTo[0]は必須）
// 複数の宛先にTOのメールを送信したい場合は半角カンマ（,）で区切って登録して下さい。
//$mailTo[0] = '';
$mailTo[0] = 'toukatsu@entetsu.co.jp';
$mailTo[1] = '';
$mailTo[2] = '';

// テキストの最大入力文字数
$maxText = 2000;


/* オプション設定（必要時のみ設定） */

// BCCで受け取りが必要な場合は設定（フォームからのメールアドレス）
$mailBcc = 'staff@ultraworks.jp';

// BCCで受け取りが必要な場合は設定（自動返信メールアドレス）
$replyBcc = '';

// 自動返信時の送信元メールアドレス
$replyAddress = 'toukatsu@entetsu.co.jp';

// 自動返信時の送信元メールアドレスに付加する名前
$replyName = 'ホテルコンコルド浜松';

// 送信エラー等で戻ってくるメールの受け取りを変更する場合のメールアドレス
$returnPath = 'toukatsu@entetsu.co.jp';

?>
