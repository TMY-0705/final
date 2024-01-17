<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>final</title>
</head>
<body>
<?php
    $pdo=new PDO('mysql:host=mysql220.phy.lolipop.lan;dbname=LAA1517434-final;charset=utf8','LAA1517434','tomoya10080525');
    $sql=$pdo->prepare('INSERT INTO music_table (music_id,music_name,artist_name)values(?,?,?)');
    if(!preg_match('/^\d+$/',$_POST['music_id'])){
        echo'楽曲IDで入力してください';
    }else if(empty($_POST['music_name'])){
            echo '楽曲名を入力してください';
        }else if(empty($_POST['artist_name'])){
            echo'アーティスト名を入力してください';
        }else if($sql->execute([$_POST['music_id'],$_POST['music_name'],$_POST['artist_name']])){
            echo'<font color="red">追加に成功しました。</font>';
        }else{
            echo'<font color="red">追加に失敗しました。</font>';
        }
?>
<br><hr><br>
<table>
    <tr><th>楽曲ID</th><th>楽曲名</th><th>アーティスト名</th><tr>

    <?php
    foreach($pdo->query('select * from music_table')as $row){
      echo '<tr>';
      echo '<td>',$row['music_id'],'</td>';
      echo '<td>',$row['music_name'],'</td>';
      echo '<td>',$row['artist_name'],'</td>';
      echo '</tr>';
      echo "\n";
    }
    ?>
    </table>
    <form action="musictoroku.php"method="post">
        <button type="submit">追加画面に戻る</button>
</form>
</body>
</html>