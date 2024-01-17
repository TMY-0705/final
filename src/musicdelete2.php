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
 
 $sql=($pdo->prepare('delete FROM music_table WHERE music_id=?'));
   if ($sql->execute([$_GET['id']])){
       echo '削除に成功しました';
   } else{
       echo '削除に失敗しました';
   }

 
    
?> 
</table>
        <button type="submit"><a href="musictop.php">トップへ戻る</button>
    </form>
    </body>
</html>