<!-- 占い結果 -->

<?php
$numbers = $_POST['numbers'];
?>

<p><?php echo date("Y/m/d", time()); ?>の運勢は</p>
<p>選ばれた数字は「
    <?php echo mt_rand(1,9); ?> 」</p>
<p>
    <?php
    $omikuji = array('大吉','中吉','小吉');
    $result = rand(0,2);
    echo $omikuji[$result]; ?>
    </p>
