<html>
<head>
    <meta charset="utf-8">
    <title>データ登録</title>
</head>

<body>
<table border="1">
<tr>
    <th>名前</th>
    <th>アドレス</th>
    <th>パスワード</th>
    <th>性別</th>
</tr>


<?php
// ファイルを開く
$openFile = fopen('data/data.txt', 'r');

// ファイル内容を1行ずつ読み込んで出力
while ($str = fgets($openFile)) {
    // echo nl2br($str);
    $array = explode("," , $str);
    echo '<tr>';
    echo '<td>'.$array[0].'</td>';
    echo '<td>'.$array[1].'</td>';
    echo '<td>'.$array[2].'</td>';
    echo '<td>'.$array[3].'</td>';
    echo '</tr>';
}

// ファイルを閉じる
fclose($openFile);
?>

</body>

</html>