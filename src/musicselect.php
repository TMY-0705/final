<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>music-select(CURD)</title>
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
<h2>楽曲一覧</h2>
<button onclick="location.href='musictop.php'">トップへ戻る</button>

<?php
$pdo=new PDO('mysql:host=mysql220.phy.lolipop.lan;dbname=LAA1517434-final;charset=utf8','LAA1517434','tomoya10080525');

// echo '<h1>音楽一覧</h1> <a href="./top.php">HOME</a> <hr>'; echo '<div>'; 
echo '<table border="1">';
echo '<tr>';
echo '  <th>ID</th>';
echo '  <th>アーティスト名</th>';
echo '  <th>曲名</th>';
echo '</tr>';
foreach ($pdo->query('SELECT * FROM music_table') as $row) { 
    // echo '<div class="list"> <p id="mname">', $row['music_name'], '</p> <a id="sname">楽曲.', $row['music_name'], '</a> <p id="category">カテゴリ: ', $row['category_name'], '</p> </div>';

    echo '<tr>';
    echo '  <td>'.$row["music_id"].'</td>';
    echo '  <td>'.$row["artist_name"].'</td>';
    echo '  <td>'.$row["music_name"].'</td>';
    echo '</tr>';


}
echo '</table>';
    ?>

</body>
</html>
