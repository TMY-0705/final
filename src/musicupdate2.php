<!DOCTYPE html>
<html lang="ja">
 <head>
  <meta charset="UTF-8">
  <title>練習6-6-output</title>
 </head>
 <body>
<?php
    $pdo=new PDO('mysql:host=mysql220.phy.lolipop.lan;dbname=LAA1517434-final;charset=utf8','LAA1517434','tomoya10080525');
     $sql=$pdo->prepare('update music_table set name=?,price=?where id=?');

     $sql=$pdo->prepare('INSERT INTO music_table (music_id,music_name,artist_name)values(?,?,?)');
     if(!preg_match('/^\d+$/',$_POST['music_
     id'])){
         echo'楽曲IDで入力してください';
     }else if(empty($_POST['music_name'])){
             echo '楽曲名を入力してください';
         }else if(empty($_POST['artist_name'])){
             echo'アーティスト名を入力してください';
         }else if($sql->execute([$_POST['music_id'],$_POST['music_name'],$_POST['artist_name']])){
             echo'<font color="red">更新に成功しました。</font>';
         }else{
             echo'<font color="red">更新に失敗しました。</font>';
         }
    
?>
        <hr>
        <table>
        <tr><th>楽曲ID</th><th>楽曲名</th><th>アーティスト名</th></tr>

<?php
foreach ($pdo->query('select * from music_table') as $row) {
    echo '<tr>';
    echo '<td>', $row['music_id'], '</td>';
    echo '<td>', $row['music_name'], '</td>';
    echo '<td>', $row['artist_name'], '</td>';
    echo '</tr>';
    echo "\n";
}
?>
        </table>
        <button onclick="location.href='musicupdate.php'">更新画面へ戻る</button>
    </body>
</html>