<!DOCTYPE html>
<HTML lang="ja">
<HEAD>
   <!-- Required meta tags -->
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   ​<META http-equiv="Content-Type" content="text/html; charset=UTF-8">
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
  <header class= "title">Voting Results</header>
      
    <!-- //header -->
 <body>
   <div class ="content">
    <?php
    require_once('function.php');
    require_once('dbconnect.php');

    //SQLを実行
    $stmt = $dbh->prepare('SELECT * FROM Homework');
    $stmt->execute();
    $results = $stmt->fetchAll();
    $count_array = ['DIO' => 0,'jotaro' => 0];
    foreach($results as $item){
        switch($item['character']){
            case 'DIO':
            $count_array['DIO']++;
            break;
            case '承太郎':
            $count_array['jotaro']++;
            break;
        }
    }


    echo 'DIO'.$count_array['DIO'];
    echo '<br>';
    echo '承太郎'.$count_array['jotaro'];

    
?>


<!-- <!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="utf-8">
    <title>投票結果</title>
</head>
<body>
//画面に表示する -->
<!-- PHP基本構文 -->
 
 <!-- $alpha = ['E', 'A', 'D', 'B', 'A', 'C', 'A', 'B', 'E', 'E', 'A', 'A', 'C'];
 $i = 0;

foreach ($alpha as $v) {
    if ($v === 'A') {
        $i++;
    }
} -->


    <!-- <?php foreach ($results as $result): ?>
        <p><?php echo h($result['gender']); ?></p>
        <p><?php echo h($result['age']); ?></p>
        <p><?php echo h($result['character']); ?></p>
        <p><?php echo h($result['kind']); ?></p>
        <p><?php echo h($result['shots']); ?></p>
        <hr>
        
    <?php endforeach; ?>
</body>
</html> -->

</div>

</BODY>
  <!-- footer -->
  <footer class="footer">
      <p class="copyWriter">&copy;Yumi Iwagaki</p>
    </footer>
    <!-- //footer -->
</HTML>