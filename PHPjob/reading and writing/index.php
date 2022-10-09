
<!-- ファイルのデータを読み書きする -->


<?php

// ファイルが書き込み可能なのか確認する

$testfile = "test.txt";
$contents = "こんにちは";

if (is_writable($testfile)) {
    echo "writable";
} else {
    echo "not writable";
    exit;
}

echo "<br>";
echo "<br>";


// 書き込みをする
$testfile = "test.txt";
$contents = "こんにちは！";

if(is_writable($testfile)) {
    // 書き込み可能なときの処理
    // 対象のファイルを開く
    $fp = fopen($testfile, "a");
    // 対象のファイルに書き込む
    fwrite($fp, $contents);
    // ファイルを閉じる
    fclose($fp);
    // 書き込みした旨の表示
    echo "finish writeing!!";
} else {
    // 書き込み不可のときの処理
    echo "not writable!";
    exit;
}

echo "<br>";
echo "<br>";

// まずは、fopenです。これは対象のファイルを開きます。
// 第二引数にて、wを記載していますが、これは後ほど説明します。
// ファイルを開いた状態を$fp という変数に格納します。

// fwrite関数で、書き込みます。
// 第一引数で$fp （開いたファイル）を、第二引数に書き込む文字列を渡します。

// 最後にファイルを閉じます。
// fclose関数ですね。




// ファイルからデータを読み込む

$test_file = "test2.txt";

if(is_readable($test_file)) {
    // 読み込み可能なときの処理
    // 対象のファイルを開く
    $fp = fopen($test_file, "r");
    // 開いたファイルから1行ずつ読み込む
    while($line = fgets($fp)) {
        // 改行コード込みで1行ずつ出力
        echo $line.'<br>';
    }
    // ファイルを閉じる
    // 読み込み不可のときの処理
    fclose($fp);
} else {
    echo "not readable!";
    exit;
}

echo "<br>";
echo "<br>";


// 例外処理

// エラー（例外）が発生する事例
// ・読み込むファイルが存在しない
// ・データベースの処理において接続障害
// ・0で割り算をしたなど

// 例外処理の書き方

// try {

//     //例外が発生する可能性があるコード
//     throw new 例外クラス名(引数)

// } catch(例外クラス名 例外を代入する変数名) {

//     //例外が発生した場合に行う処理

// }
//     //エラーが発生しなければ続く通常の処理


function devide($int1,$int2) {
    try {
        if($int2 == 0) {
            throw new Exception('0で割ることはできません。');
        }
        return $int1 / $int2;
    } catch(Exception $e) {
        echo "例外処理が発生しました";
        echo "<br>";
        echo $e->getMessage();
    }
}

echo devide(5, 0);


// 例外が発生する可能性がある箇所をtry{}に書きます。
// throw new Exception()で例外を投げます。
// 例外が投げられた時の処理をcatch(){}に書いていきます。


?>