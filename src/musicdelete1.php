<!DOCTYPE html>
<html lang="ja">
 <head>
  <meta charset="UTF-8">
  <title>final</title>
 </head>
 <body>
    <table>
<?php
$pdo=new PDO('mysql:host=mysql220.phy.lolipop.lan;dbname=LAA1517434-final;charset=utf8','LAA1517434','tomoya10080525');
 
 

 foreach($pdo->query('select * from music_table')as $row){
    echo '<tr>';
    echo '<td>',$row['music_id'],'</td>';
    echo '<td>',$row['music_name'],'</td>';
    echo '<td>',$row['artist_name'],'</td>';
    echo '<td>';
    echo '<a href="musicdelete2.php?id=', $row['music_id'], '">削除</a>';
    echo '</td>';
    echo '</tr>';
    echo "\n";
}

 
    
?> 
</table>
    </form>
    </body>
</html>