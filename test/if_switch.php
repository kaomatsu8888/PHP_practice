<!-- phpでif switch文を表す -->
<?php
$i = 3; // 変数$iに0を代入
switch ($i) { // $iの値によって処理を分岐
  case 0: // $iが0の場合
    echo "PHP<br>"; // PHPを表示
    break; // 処理を終了
  case 1: // $iが1の場合
    echo "Java<br>"; // Javaを表示
    break; // 処理を終了
  case 2: // $iが2の場合
    echo "Ruby<br>"; // Rubyを表示
    break; // 処理を終了
  default: // それ以外の場合
    echo "HTML<br>"; // HTMLを表示
    break; // 処理を終了
}
