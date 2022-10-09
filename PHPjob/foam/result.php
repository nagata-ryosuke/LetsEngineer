<!-- フォームに入力したデータを取得する -->

<?php
$my_name = $_POST['my_name'];
$mail_address = $_POST['mail_address'];
$password = $_POST['password'];
?>
<p>私の名前は、<?php echo $my_name; ?></p>
<p>私のメールアドレスは、<?php echo $mail_address; ?></p>
<p>私のパスワードは、<?php echo $password; ?></p>


<br>
<br>
<br>


<!-- いろいろなフォームの入力欄 -->

<?php
$my_name = $_POST['my_name'];
$password = $_POST['password'];
$sex = $_POST['sex'];
$hidden_param = $_POST['hidden_param'];
$age = $_POST['age'];
?>

<p>私の名前は、<?php echo $my_name; ?>です。</p>
<p>私のパスワードは、<?php echo $password; ?>です。</p>
<p>性別は<?php echo $sex; ?>です。</p>
<p>性別は<?php echo $hidden_param; ?>です。</p>
<p>年齢は<?php echo $age; ?>です。</p>


<!-- チャレンジ -->

<?php
$name = $_POST["name"];
$product = $_POST["product"];
$quantity = $_POST["quantity"];
?>

<p>お名前：<?php echo $name; ?></p>
<p>ご希望景品：<?php echo $product; ?></p>
<p>個数：<?php echo $quantity; ?></p>

