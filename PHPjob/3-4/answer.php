<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
</head>
<body>


<?php 
$name = $_POST['name'];
$port = $_POST['port'];
$language = $_POST['language'];
$command = $_POST['command'];
$answer = $_POST['answer'];
$answer2 = $_POST['answer2'];
$answer3 = $_POST['answer3'];

?>


<p> <?php echo $name; ?> さんの結果は・・・？</p>

<p>①の答え</p>

<?php

if ($port == $answer) {
    echo "正解！";
} else {
    echo "残念・・・";
} ?>

<p>②の答え</p>

<?php

if ($language == $answer2) {
    echo "正解！";
} else {
    echo "残念・・・";
} ?>

<p>③の答え</p>

<?php

if ($command == $answer3) {
    echo "正解！";
} else {
    echo "残念・・・";
} ?>


</body>
</html>