<!DOCTYPE html>
<html lang="ja">
 <head>
  <meta charset="UTF-8">
  <title>final</title>
 </head>
 <body>
<?php
$pdo=new PDO('mysql:host=mysql220.phy.lolipop.lan;dbname=LAA1517434-final;charset=utf8','LAA1517434','tomoya10080525');
 
 $sql=($pdo->prepare('delete FROM music WHERE id=?'));
   if ($sql->execute([$_GET['music_id']])){
       echo '削除に成功しました';
   } else{
       echo '削除に失敗しました';
   }

 foreach($pdo->query('select * from music')as $row){
    echo '<tr>';
    echo '<td>',$row['music_id'],'</td>';
    echo '<td>',$row['music_name'],'</td>';
    echo '<td>',$row['artist_name'],'</td>';
    echo '<td>';
    echo '</td>';
    echo '</tr>';
    echo "\n";
}

 
    
?> 
</table>
        <button type="submit"> トップへ戻る</button>
    </form>
    </body>
</html>