<?php session_start(); ?>
<?php require '../header.php'; ?>
<?php require 'menu.php'; ?>
<?php
if (isset($_SESSION['customer'])) { /* issetは変数がセットされているかどうかを調べるための関数。 */
	unset($_SESSION['customer']); /* unsetは変数を削除するための関数。 */
	echo 'ログアウトしました。';
} else {
	echo 'すでにログアウトしています。';
}
?>
<?php require '../footer.php'; ?>
