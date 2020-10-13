<?php
// ファイルに書き込み
$name = $_POST['name'];
$mail = $_POST['mail'];
$password = $_POST['password'];
$seibetsu = $_POST['seibetsu'];

function h($str){
    return htmlspecialchars($str, ENT_QUOTES);
}


//文字作成
$str = $str . ' ' . $name . ' ' . $mail . ' ' . $password . ' ' . $seibetsu;
//File書き込み( ※フォルダは先に用意する )
$openFile = fopen("./data/data.txt", "a");    // ファイル読み込み

fwrite($openFile, h($name).","); 
fwrite($openFile, h($mail).",");
fwrite($openFile, h($password).",");
fwrite($openFile, h($seibetsu)."\n");

fclose($openFile);


?>


<html>

<head>
    <meta charset="utf-8">
    <title>File書き込み</title>
</head>

<body>

    <h1>入力完了です。</h1>
    

    <ul>
        <li><a href="input.php">戻る</a></li>
    </ul>
</body>

</html>
