<!-- 3章 練習問題１ -->


<?php

const TAX = 1.1;

$products = ["鉛筆" => 100 , "消しゴム" => 150 , "物差し" => 500];

foreach ($products as $key => $value) {
    echo $key;
    echo 'は';
    echo $value * TAX;
    echo '円です。';
    echo '<br>';
}

?>