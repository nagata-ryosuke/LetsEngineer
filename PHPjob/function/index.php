<?php

// 数学に関する関数


// ceil（切り上げ）
// https://www.php.net/manual/ja/function.ceil.php
$x = 5.2;
echo ceil($x);
echo "<br>";


// floor（切り捨て）
// https://www.php.net/manual/ja/function.floor.php
$x = 5.2;
echo floor($x);
echo "<br>";


// round（四捨五入）
// https://www.php.net/manual/ja/function.round.php
$x = 5.2;
echo round($x);
echo "<br>";

$y = 5.7;
echo round($y);
echo "<br>";


// pi（円周率）
// https://www.php.net/manual/ja/function.pi.php
echo pi();

function circleArea($r) {
    $circle_area = $r * $r * pi();
    echo $circle_area;
}

// 半径が2の円の面積の計算
circleArea(2);
echo "<br>";


// mt_rand（乱数）
// https://www.php.net/manual/ja/function.mt-rand.php
echo mt_rand(1,100);
echo "<br>";
echo "<br>";
echo "<br>";



// 文字列に関する関数

// strlen（文字列の長さ）
// https://www.php.net/manual/ja/function.strlen.php
$str = "hogehoge";
echo strlen($str);
echo "<br>";


// strpos（検索）
// https://www.php.net/manual/ja/function.strpos.php
$str = "yoneyama";
echo strpos($str,"a");
echo "<br>";


// substr（文字列の切り取り）
// https://www.php.net/manual/ja/function.substr.php

// substr(対象の文字列, 開始位置, 文字数)
// substr($str, -2, 2)であれば、$strの-2番目から2文字を切り取る
$str = "yoneyama";
echo substr($str, -2,2);
echo "<br>";


// str_replace（置換）
// https://www.php.net/manual/ja/function.str-replace.php

// str_replaceは対象の文字列を置き換えるメソッドです。
// str_replace(置き換える前の文字列, 置き換えた後の文字列, 対象の文字列)
$str = "yoneyama";
echo str_replace("neya", "NEYA", $str);
echo "<br>";

// str_replace("neya", "NEYA", $str);であれば、yoneyamaの中の neya の部分を NEYA に置き換えています。
// また、「 空白を空文字で置き換える 」という意味で、空白を削除する、という使い方もされます。
$str = "I am yoneyama";
echo str_replace(" ", "", $str);
echo "<br>";
echo "<br>";
echo "<br>";



// 日本語において、文字列操作の関数を使用する場合

$str = "あいうえお";
echo strlen($str);
echo "<br>";
// これを実行すると、15と出力されます。
// これは、日本語の文字が マルチバイト文字列 というものだからです。
// 半角英数字とは違う数え方をするので、こうなってしまいます。
// そこでそれを対応させる為にはmb_とつく、マルチバイトに対応したメソッドを使用してあげましょう。
// ちなみに、mbはマルチバイトの略です。

$str = "あいうえお";
echo mb_strlen($str);
echo "<br>";
// これで5と出力してくれます。
// 主に 文字列を数える メソッドは、日本語を使用する場合に注意が必要です。
// 今までみてきた中ですと、strlen、strpos、substrです。
// これらに関しては、すでにマルチバイト対応のメソッドがあります。
// https://www.php.net/manual/ja/function.mb-strlen.php
// https://www.php.net/manual/ja/function.mb-strpos.php
// https://www.php.net/manual/ja/function.mb-substr.php
// https://www.php.net/manual/ja/ref.mbstring.php



// 表示に関する関数

// printf（フォーマット化した文字列を出力）
// https://www.php.net/manual/ja/function.printf.php

$name = "米山さん";
$limit_number = 40;
// 上記の変数を使用して、「米山さんの残り時間はあと40時間です」という文字列を出力したいとします。
// 今まで習った方法だと、echoで連結演算子を使用する方法だと思います。

echo $name."の残り時間はあと".$limit_number."です";
echo "<br>";
// printfを使用すると少し見やすくなります。

printf("%sの残り時間はあと%dです", $name, $limit_number);
echo "<br>";
// まずは、"%sの残り時間はあと%dです"です。
// これがフォーマット化された文字列です。
// 要は先に、完成形の文字列を用意してあげます。
// 文字列の中にある、%s、%dですが、これはここに変数が入るよ、と教えてあげています。

// %s、%dは %記法 と呼び、何のデータ型で入るか指定してあげます。

// %s…文字列
// %d…数値


$name = "米山さん";
$limit_time = 40;
$price = 4000;

printf("%sはあと%d時間で%dの罰金です。", $name, $limit_time, $price);
echo "<br>";

// 増やしても引数と%dの場所を増やせば問題ないです。


// また、printfは他にも使い方があります。
// 残り時間を2桁で表示したいこともあると思います。
// （残り04時間30分、など）
$limit_hour = 20;
$limit_minute = 10;
printf("残り%02d時間%02d分", $limit_hour, $limit_minute);

$limit_hour = 4;
$limit_minute = 4;
printf("残り%02d時間%02d分", $limit_hour, $limit_minute);
echo "<br>";
// 「残り20時間10分」と「残り04時間04分」と表示されたと思います。
// %02dと02を入れることで、桁数を指定することができ、空いた桁に0を自動で入れてくれます。


// sprintf（変数に代入できるprintf）
// https://www.php.net/manual/ja/function.sprintf.php
$limit_hour = 4;
$limit_minute = 4;
printf("残り%02d時間%02d分", $limit_hour, $limit_minute);

$limit_time = sprintf("残り%02d時間%02d分", $limit_hour, $limit_minute);
echo $limit_time;
echo "<br>";
echo "<br>";
echo "<br>";

// https://www.php.net/manual/ja/function.sprintf.php




// 便利な関数（配列）

// count（要素の数を数える）
// https://www.php.net/manual/ja/function.count.php
$member = ["tanaka", "sasaki", "kimura", "yoshida", "uchida"];
echo count($member);
echo "<br>";


// sort（要素の並べ替え）
// https://www.php.net/manual/ja/function.sort.php
$member = ["tanaka", "sasaki", "kimura", "yoshida", "uchida"];
sort($member);
var_dump($member);
echo "<br>";

// アルファベットだけでなく、数字でも大丈夫です。
$numbers = [26, 35, 17, 67, 45];
sort($numbers);
var_dump($numbers);
echo "<br>";

// 並び替えが必要なときは どういう並び替えがしたいのか を考え、ケースバイケースで使用していきましょう
// https://www.php.net/manual/ja/ref.array.php



// in_array（配列に中にある要素が存在しているか）
// https://www.php.net/manual/ja/function.in-array.php
$members = ["tanaka", "sasaki", "kimura", "yoshida", "uchida"];
var_dump(in_array("tanaka", $members));
echo "<br>";

// in_arrayの公式は、
// in_array(調べたい文字もしくは数値, 対象の配列)
// 論理値が結果として返る => bool(true)

// このin_arrayはif文の条件でよく使用します。 例えば、配列の中に田中さんがいたら、「田中さんがいるよ！」と表示し、いなければ「田中さんはいないよ！」というプログラムは下記になります。
$members = ["tanaka", "sasaki", "kimura", "yoshida", "uchida"];
if(in_array("tanaka", $members)) {
    echo "田中さんがいるよ！";
} else {
    echo "田中さんはいないよ！";
}
echo "<br>";


// implode（配列を結合して文字列に変換）
// https://www.php.net/manual/ja/function.implode.php
$members = ["tanaka", "sasaki", "kimura", "yoshida", "uchida"];
$atstr = implode("@", $members);
var_dump($atstr);
echo "<br>";

// 「区切り文字は必要ないよ！ただ結合したいだけだよ！」というのであれば、対象の配列だけを指定すればとりあえず結合させることは可能です。
$atstr = implode($members);
var_dump($atstr);
echo "<br>";


// explode（文字列を指定の区切りで配列にする）
// https://www.php.net/manual/ja/function.explode.php
$members = ["tanaka", "sasaki", "kimura", "yoshida", "uchida"];
$atstr = implode("@", $members);
var_dump($atstr);
echo "<br>";

$re_membars = explode("@", $atstr);
var_dump($re_membars);
echo "<br>";

// 今回は@を区切り文字として、配列に分割しました。 よく使うのはカンマ区切りの文字列を配列にするときです。
$str = "1,2,3,4,5";
$array = explode(",",$str);
var_dump($array);
echo "<br>";
echo "<br>";
echo "<br>";



// 便利な関数（日付・時間）

// UNIXタイムスタンプについて
// プログラミングにおける日付、時刻の取り扱いでは、 UNIXタイムスタンプ という形式がよく使用されます。
// まずタイムスタンプとは、 「1970年1月1日午前0時0分0秒」から、何秒経過しているか 表した数値です。
// UNIXは、UNIX系OSの意味です。


// time（現在時刻を取得）
// https://www.php.net/manual/ja/function.time.php
echo time();
echo "<br>";

var_dump(time());
echo "<br>";


// date（タイムスタンプから日付に戻す）

echo date("y-m-d h:i:s", time());
echo "<br>";

// 例：2017/4/12 16:00:00のタイムスタンプを変換
echo date("Y-m-d H:i:s", 1491980400);
echo "<br>";


// 日付フォーマットについて
echo date("Y年m月d日 H時i分s秒", time());
echo "<br>";


// strtotime（特定日付のタイムスタンプを取得）
// https://www.php.net/manual/ja/function.strtotime.php
// 特定日付のタイムスタンプを求めるのであれば、strtitimeがおすすめです。

echo strtotime("2017/2/16 11:25:00");
echo "<br>";
// 日付の文字列はある程度書き方がきまっているので、 2017/2/16 11:25:00 というかたちで書くようにしてしまいましょう。


// 日付ではない指定方法
// strtotimeは案外便利で、 last Sunday と渡すと、先週の日曜日の現時刻を返してくれます。
// また、 +2 day と書くと、2日後の現時刻を返してくれます。

// 先週の日曜日
echo strtotime("last Sunday");
echo "<br>";
// 2日後
echo strtotime("+2 day");
echo "<br>";



?>