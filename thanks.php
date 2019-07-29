<!DOCTYPE html>
<html lang="ja">
<head>
   <!-- Required meta tags -->
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   ​<meta http-equiv="Content-type" content="text/html; charset=UTF-8">
   <link rel="stylesheet" href="assets/css/reset.css">

   <!-- Bootstrap CSS -->
 
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
     integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
   ​
   <link rel="stylesheet" href="assets/css/style.css">
　 
   <!-- google font-->
   <link href="https://fonts.googleapis.com/css?family=Acme&display=swap" rel="stylesheet">
   <link href="https://fonts.googleapis.com/css?family=Acme|Kosugi+Maru|M+PLUS+1p&display=swap" rel="stylesheet">
  <!-- header -->
  <header class= "title">Thank you for Answering!!</header>
      
    <!-- //header -->

    
    <div class ="content">
<?php
  try {
    require_once('function.php');
    require_once('dbconnect.php');

    $gender = $_POST['gender'];
    $age = $_POST['age'];
    $character = $_POST['character'];
    // $kind = $_POST['kind'];
    $shots = $_POST['shots'];
    // SQLを実行
    $stmt = $dbh -> prepare('INSERT INTO Homework (gender, age, `character`, kind, shots) valueS (?, ?, ?, ?, ?)');
    $stmt -> execute([$gender, $age, $character, 'test', $shots]);//?を変数に置き換えてSQLを実行
  } catch(PDOException $e) {  // 例外処理
    echo '障害によりご迷惑をおかけしています。<BR />';
    echo 'エラーの内容 : '.
          mb_convert_encoding($e->getMessage(), "UTF-8", "SJIS");

// var_dump($e); // デバッグ用

    echo $e->getCode();
  }
  $dbh = null;  // オブジェクトを破棄
?>
  <!-- <h4>ご回答ありがとうございました！</h4> -->
   <!-- 見るボタンを表示（フォームの隠しフィールドで送る） -->
   <?php
    echo '<form method="POST" action="view.php">';
    echo '<input name="gender" type="hidden" value="'.$gender.'">';
    echo '<input name="age" type="hidden" value="'.$age.'">';
    echo '<input name="character" type="hidden" value="'.$character.'">';
    // echo '<input name="kind" type="hidden" value="'.$kind.'">';
    echo '<input name="shots" type="hidden" value="'.$shots.'">';
    // echo '<P>投票結果については、[見る]を押してください。</P>';
    echo '<input type="SUBMIT" id ="btn" value="投票結果を見る">';
    echo '&nbsp;';
    echo '</form>';
    ?>
    </div>
</body>
  <!-- footer -->
  <footer class="footer">
      <p class="copyWriter">&copy;Yumi Iwagaki</p>
    </footer>
    <!-- //footer -->
</html>
