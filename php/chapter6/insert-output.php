<?php require '../header.php'; ?>
<?php
$pdo=new PDO('mysql:host=localhost;dbname=shop;charset=utf8', 
	'staff', 'password');/* mysql:host=localhostはデータベースのホスト名を指定するための文字列。dbname=shopはデータベース名を指定するための文字列。charset=utf8は文字コードを指定するための文字列。 */
$sql=$pdo->prepare('insert into product values(null, ?, ?)');
if ($sql->execute([$_REQUEST['name'], $_REQUEST['price']])) {
	echo '追加に成功しました。';
} else {
	echo '追加に失敗しました。';
}
?>
<?php require '../footer.php'; ?>
