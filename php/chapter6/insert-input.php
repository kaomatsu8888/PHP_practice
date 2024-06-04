<?php require '../header.php'; ?>
<p>商品を追加します。</p>
<form action="insert-output.php" method="post">
商品名<input type="text" name="name"><!-- type="text"は1行のテキストボックスを作成するための属性。name属性はフォームの名前を指定するための属性。 -->
価格<input type="text" name="price"><!-- type="text"は1行のテキストボックスを作成するための属性。name属性はフォームの名前を指定するための属性。 -->
<input type="submit" value="追加"><!-- type="submit"は送信ボタンを作成するための属性。value属性はボタンに表示する文字列を指定するための属性。 -->
</form>
<?php require '../footer.php'; ?>
