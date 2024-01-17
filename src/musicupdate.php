<!DOCTYPE html>
<html lang="ja">
 <head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="style.css">
  <title></title>
 </head>
 <body>
  <div class="th0">楽曲ID</div>
  <div class="th1">楽曲名</div>
  <div class="th1">アーティスト名</div>
<?php
 $pdo=new PDO('mysql:host=mysql220.phy.lolipop.lan;dbname=LAA1517434-final;charset=utf8','LAA1517434','tomoya10080525');
 foreach ($pdo->query('select * from music_table') as $row) {
  echo '<form action="musicupdate2.php" method="post">';
  echo '<input type="hidden" name="music_id" value="',$row['music_id'],'">';
  echo '<div class="td0">',$row['music_id'],'</div>';
  echo '<div class="td1">';
  echo '<input type="text" name="music_name" value="',$row['music_name'],'">';
  echo '</div> ';
  echo '<div class="td1">';
  echo '<input type="text" name="artist_name" value="',$row['artist_name'],'">';
  echo '</div> ';
  echo '<div class="td2"><input type="submit"value="更新"></div>';
  echo '</form>';
  echo "\n";
 }
?>

    </body>
</html>