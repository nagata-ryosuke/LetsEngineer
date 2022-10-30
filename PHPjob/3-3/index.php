<<<<<<< Updated upstream
<!-- PHP 3章 練習問題２ -->


<!-- ・くじ引きを作ります
分かりやすい様に、適当な数字（０〜９）の羅列を入力して、占うというボタンを押した後、ランダムな位置の数字を抜き出し
０：凶、１〜３：小吉、４〜６、中吉、７〜８：吉、９：大吉
の結果を今日の日付と一緒に表示してください。 

step1:入力フォームの作成
数字の入力と占うというボタンを作成

step2:結果を表すページを作成し、フォームから受け取った数字の羅列から1文字の数字を抜き出す。

step3:今日の日付と結果を表示する。 -->


<form action="result.php" method="post">
    <p>0~9の番号を使って好きな数字の羅列を入力してください。</p>
    <input type="text" name="numbers" />
    <input type="submit" value="占う">
</form>
=======
<!-- 3章 練習問題2 -->


<!DOCTYPE html>
<html lang="jp">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Practice2</title>
</head>
<body>

<form action="result.php" method="post">
    <p>好きな名前を入れてください。</p>
    <input type="text" name="name" />
    <br>
    <p>1~6の中で好きな数字を入れてください。</p>
    <input type="text" name="numbers" />
    <br>
    <br>
    <input type="submit" value="送信">
</form>

  <!-- ①フォームを作成しましょう -->
  <!-- ここにフォームを記述してください -->
  </form>
</body>
</html>
>>>>>>> Stashed changes
