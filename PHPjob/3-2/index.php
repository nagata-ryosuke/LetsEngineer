<!-- 3章 練習問題１ -->


<?php

$fruits = ["りんご" => "100", "みかん" => "150", "もも" => "500"];
$quantity = [3,1,6];

function basket($fruits, $quantity) {
    return $fruits * $quantity;
}

foreach ($fruits as $fruit => $value) {
    echo $fruit. "は". basket(). "円です". "<br>";
}
?>