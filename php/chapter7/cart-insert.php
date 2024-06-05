<?php session_start(); ?>
<?php require '../header.php'; ?>
<?php require 'menu.php'; ?>
<?php
$id=$_REQUEST['id']; /* カートに追加する商品のID */
if (!isset($_SESSION['product'])) { /* カートに商品がない場合 */
	$_SESSION['product']=[]; /* カートに商品を初期化 */
}
$count=0; /* カート内の商品数 */
if (isset($_SESSION['product'][$id])) { /* カートに商品がある場合 */
	$count=$_SESSION['product'][$id]['count']; /* カート内の商品数を取得 */
}
$_SESSION['product'][$id]=[ /* カートに追加する商品のID、名前、価格、数量 */
	'name'=>$_REQUEST['name'], /*  商品名 */
	'price'=>$_REQUEST['price'], /* 価格 */
	'count'=>$count+$_REQUEST['count'] /* 数量 */
];
echo '<p>カートに商品を追加しました。</p>'; /* カートに商品を追加した旨を表示 */
echo '<hr>'; /* 水平線を表示 */
require 'cart.php'; /* カートの中身を表示 */
?>
<?php require '../footer.php'; ?>
