<?php require '../header.php'; ?>
<?php
$pdo=new PDO('mysql:host=localhost;dbname=shop;charset=utf8', /* PDOはPHPのデータベース操作を行うためのクラスです。 */
	'staff', 'password');
foreach ($pdo->query('select * from product') as $row) {/* foreachは配列の要素を順番に取り出すための制御構造です。 */
	echo "<p>$row[id]:$row[name]:$row[price]</p>";
}
?>
<?php require '../footer.php'; ?>
