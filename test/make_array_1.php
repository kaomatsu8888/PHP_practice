<pre>
<?php
// 配列を作成
$friends = array("はるき", "かおる", "ひでと", "まさとし", "たかのり"); // ひらがな1文字のバイト数は3バイト
$friends[] = "まさひろ"; // 配列に要素を追加
$friends[0] = "たかひろ"; // 配列に要素を追加
// 配列の要素数を取得
$friends_count = count($friends); // 配列の要素数を取得
// 配列の要素数分繰り返す
for ($i = 0; $i < $friends_count; $i++) { // 配列の要素数分繰り返す
  echo $friends[$i] . "さん\n"; // 配列の要素を表示
  var_dump($friends[$i]); // データ型を表示
}
?>
</pre>

