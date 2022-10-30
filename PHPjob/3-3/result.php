<!-- 3章 練習問題2 -->


<?php
$name= $_POST['name'];
$numbers = $_POST['numbers'];
?>


<?php $number = $numbers * mt_rand(1,6);
    if ($number >= 1 && $number <= 10) {
        $result = '凶';
        } else if ($number >= 11 && $number <= 15) {
        $result = '小吉';
        } else if ($number >= 16 && $number <= 20) {
        $result = '中吉';
        } else if ($number >= 21 && $number <= 25) {
        $result = '吉';
        } else if ($number >= 26 && $number <= 36) {
        $result = '大吉';
        } else if ($number >= 27)
        { $result = '残念';
        } ?>
        
    <p><?php echo date("Y/m/d H:i:s", time()); ?>の運勢は</p>
    <p>名前は <?php echo $name; ?>  です。</p>
    <p>番号は<?php echo $number ?>です。</p>
    <p>結果は <?php echo $result ?>です。</p>