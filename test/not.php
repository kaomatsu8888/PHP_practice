<pre>
<?php
$true = TRUE; // 大文字小文字を区別しない
$false = FALSE; // 大文字小文字を区別しない

$a = !$true; // trueの否定はfalse
$b = !$false; // falseの否定はtrue
$c = !$true && !$true; // どちらもtrueならtrue
$d = !($true && $false); // どちらかがfalseならfalse
var_dump($a, $b, $c, $d); // var_dumpで変数の型と値を表示
