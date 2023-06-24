<?php
// Inputから受け取る

$name = $_POST['name'];
$birthPlace = $_POST['birthPlace'];
$bloodtype = $_POST['bloodtype'];

// データを整形する
$data = $name . $birthPlace . $bloodtype . "\n" ;

// データを保存する
file_put_contents('data/data.txt', $data, FILE_APPEND)


?>



<html>

<head>
    <meta charset="utf-8">
    <title>File書き込み</title>
</head>

<body>

    <h1>書き込みしました。</h1>
    <h2>./data/data.txt を確認しましょう！</h2>




    <ul>
        <li><a href="read.php">確認する</a></li>
        <li><a href="input.php">戻る</a></li>
    </ul>
</body>

</html>
