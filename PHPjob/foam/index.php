<!-- フォームに入力したデータを取得する -->

<form action="result.php" method="POST">
    名前：<input type="text" name="my_name" />
    <br>
    メールアドレス：<input type="text" name="mail_address" />
    <br>
    パスワード：<input type="password" name="password" />
    <br>
    <input type="submit" value="送信" />
</form>

<br>
<br>
<br>


<!-- いろいろなフォームの入力欄 -->

<form action="result.php" method="post">
    私の名前：<input type="text" name="my_name"/>
    <br>
    パスワード：<input type="text" name="password"/>
    <br>
    性別：
        <input type="radio" name="sex" value="男性"/>男性
        <input type="radio" name="sex" value="女性"/>女性
    <br>
    年齢：
        <select name="age">
            <option value="21">21</option>
            <option value="22">22</option>
            <option value="23">23</option>
            <option value="24">24</option>
        </select>
    <br>
    <input type="hidden" name="hidden_param" value="隠しパラメータから" />
    <input type="disabled" name="hidden_param" value="隠しパラメータから" />
        <input type="submit" value="送信するよ！">
</form>

<br>
<br>
<br>


<!-- チャレンジ -->

<!-- 以下のフォーム、および表示画面を作成してください。

景品応募フォームを想定し、名前、景品選択、個数の入力欄を用意します。
名前はtextで入力します。
景品はradioで準備します。
個数はselectタグとし、1から10まで選択可能としてください。
各name属性はお任せします。 -->

<form action="result.php" method="post">
    お名前：<input type="text" name="name"?>
    <br>
    ご希望景品：
    <input type="radio" name="product" value="A賞">A賞
    <input type="radio" name="product" value="B賞">B賞
    <input type="radio" name="product" value="C賞">C賞
    <br>
    個数：
        <select name="quantity">
            <?php for ($i=1;$i<=10;$i++) { ?>
            <option value="<?php echo $i; ?>">
                <?php echo $i; ?>
            </option>
            <?php } ?>
        </select>
    <br>
    <input type="submit" value="申込">
</form>