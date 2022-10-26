<<<<<<< Updated upstream
<!DOCTYPE html>
<html lang="en">
=======
<?php
$name = $_POST['name'];
?>



<!DOCTYPE html>
<html lang="ja">
>>>>>>> Stashed changes
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
<<<<<<< Updated upstream
    <title>Document</title>
</head>
<body>

<?php
$name = $_POST['name'];

?>
=======
    <title>３章チェックテスト</title>
</head>
<body>

>>>>>>> Stashed changes


<p>お疲れ様です <?php echo $name; ?> さん</p>
<form action="answer.php" method="POST">
    <h2>①ネットワークのポート番号は何番？</h2>

<<<<<<< Updated upstream
    <?php $port = ["80","22","20","21"];
    $answer = $port[0];
    
    foreach ($port as $value) { ?>
        <input type="radio" name="port" value="<?php echo $value; ?>">
=======
    <?php $ports = ["80","22","20","21"];
    $answer = $ports[0];
    
    foreach ($ports as $value) { ?>
        <input type="radio" name="ports" value="<?php echo $value; ?>">
>>>>>>> Stashed changes
        <?php echo $value; 
    } ?>

    <input type="hidden" name="answer" value="<?php echo $answer ?>">


    <h2>②Webページを作成するための言語は？</h2>

    <?php $language = ["PHP","Python","JAVA","HTML"];
    $answer2 = $language[3];

    foreach ($language as $value) { ?>
        <input type="radio" name="language" value="<?php echo $value; ?>">
        <?php echo $value; 
    } ?>

    <input type="hidden" name="answer2" value="<?php echo $answer2 ?>">


    <h2>③MySQLで情報を取得するためのコマンドは？</h2>

    <?php $command = ["join","select","insert","update"];
    $answer3 = $command[1];

    foreach ($command as $value) { ?>
        <input type="radio" name="command" value="<?php echo $value; ?>">
        <?php echo $value; 
    } ?>

    <input type="hidden" name="answer3" value="<?php echo $answer3 ?>">

    <br>
    <br>
    <input type="hidden" name="name" value=<?php echo $name; ?>>
    <input type="submit" value="回答する">

</form>

</body>
</html>