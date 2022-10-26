<<<<<<< Updated upstream
<!DOCTYPE html>
<html lang="en">
=======
<?php 
$name = $_POST['name'];
$ports = $_POST['ports'];
$language = $_POST['language'];
$command = $_POST['command'];
$answer = $_POST['answer'];
$answer2 = $_POST['answer2'];
$answer3 = $_POST['answer3'];
?>



<!DOCTYPE html>
<html lang="jp">
>>>>>>> Stashed changes
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
<<<<<<< Updated upstream
    <title>Document</title>
=======
    <title>３章チェックテスト</title>
>>>>>>> Stashed changes
</head>
<body>


<<<<<<< Updated upstream
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
=======
<p> <?php echo $name; ?> さんの結果は・・・？</p>


<?php

$check = [$ports => $answer, $language => $answer2, $command => $answer3];

foreach($check as $key => $value) {
    if ($key == $value) {
        $false = "正解！";
    } else {
        $false = "残念・・・";
    }
} ?>


<p>①の答え</p>

<?php echo $false; ?>


<p>②の答え</p>

<?php echo $false; ?>


<p>③の答え</p>

<?php echo $false; ?>
>>>>>>> Stashed changes


</body>
</html>