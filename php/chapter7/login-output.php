<?php session_start(); ?><!-- session_startはセッションを開始するための関数。 -->
<?php require '../header.php'; ?>
<?php require 'menu.php'; ?>
<?php
unset($_SESSION['customer']);/* unsetは変数を削除するための関数。$_SESSION['customer']はセッション変数を指定するための構文。 */
$pdo=new PDO('mysql:host=localhost;dbname=shop;charset=utf8',  /* PDOはPHPのデータベース操作を行うためのクラスです。 */
	'staff', 'password');
$sql=$pdo->prepare('select * from customer where login=? and password=?'); /* prepareはSQL文を実行するためのメソッド。 */
$sql->execute([$_REQUEST['login'], $_REQUEST['password']]); /* executeはSQL文を実行するためのメソッド。 */
foreach ($sql as $row) { /* foreachは配列の要素を順番に取り出すための制御構造です。 */
	$_SESSION['customer']=[ /* customerは顧客情報を格納するための配列。 */
		'id'=>$row['id'], 'name'=>$row['name'], 
		'address'=>$row['address'], 'login'=>$row['login'], 
		'password'=>$row['password']];
}
if (isset($_SESSION['customer'])) { /* issetは変数がセットされているかどうかを調べるための関数。 */
	echo 'いらっしゃいませ、', $_SESSION['customer']['name'], 'さん。'; /* $_SESSION['customer']['name']は顧客名を指定するための構文。 */
} else { /* elseはif文の条件に当てはまらない場合に実行される制御構造です。 */
	echo 'ログイン名またはパスワードが違います。'; /* echoは文字列を出力するための言語構造。 */
}
?>
<?php require '../footer.php'; ?>
