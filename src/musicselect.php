<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>music-select(CURD)</title>
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
<h2>楽曲一覧</h2>
<a href="CRUD-menu.php">メニューに戻る</a>

<?php
$pdo=new PDO('mysql:host=mysql220.phy.lolipop.lan;dbname=LAA1517434-final;charset=utf8','LAA1517434','tomoya10080525');

echo '<h1>音楽一覧</h1> <a href="./top.php">HOME</a> <hr>'; echo '<div>'; 
foreach ($pdo->query('SELECT music.*, category.category_name FROM music LEFT JOIN category ON music.category_id = category.category_id') as $row) { 
    echo '<div class="list"> <img id="img" src="../img/', $row['img'], '"> <p id="mname">', $row['music_name'], '</p> <a id="sname">楽曲.', $row['artist_name'], '</a> <p id="category">カテゴリ: ', $row['category_name'], '</p> </div>'; }
    echo '</div>'; 
    ?>

</body>
</html>
