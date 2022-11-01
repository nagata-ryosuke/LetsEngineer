<!-- 3章 練習問題１ -->


<?php

<<<<<<< Updated upstream
const TAX = 1.1;

$products = ["鉛筆" => 100 , "消しゴム" => 150 , "物差し" => 500];

foreach ($products as $key => $value) {
    echo $key;
    echo 'は';
    echo $value * TAX;
=======
$price1 = 100;
$price2 = 150;
$price3 = 500;

function calc_tax($price)
{
  $tax = $price * 1.1;
  return $tax;
}

$tax1 = calc_tax($price1);
$tax2 = calc_tax($price2);
$tax3 = calc_tax($price3);

$products = ["鉛筆" => $tax1 , "消しゴム" => $tax2 , "物差し" => $tax3];

foreach ($products as $key => $value) {
    echo $key;
    echo 'の税込価格は';
    echo $value;
>>>>>>> Stashed changes
    echo '円です。';
    echo '<br>';
}

?>