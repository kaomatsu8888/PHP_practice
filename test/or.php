<pre>
<?php
$true = TRUE; // 大文字小文字を区別しない
$false = FALSE; // 大文字小文字を区別しない

$a = $true || $true; // どちらかがtrueならtrue
$b = $true || $false; // どちらかがtrueならtrue
$c = $true || $true || $true; // どれかがtrueならtrue
$d = $true || $false || $false; // どれかがtrueならtrue

$e = $true || ($true || $false); // どれかがtrueならtrue
$f = $false || $false; // どちらもfalseならfalse
var_dump($a, $b, $c, $d, $e, $f); // var_dumpで変数の型と値を表示
