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
  <header class= "title">Voting Results</header>
      
    <!-- //header -->
 <body>
   <div class ="vote_content">
    <?php
    require_once('function.php');
    require_once('dbconnect.php');

    //SQLを実行
    $stmt = $dbh->prepare('select * FROM Homework');
    $stmt->execute();
    $results = $stmt->fetchAll();
    $count_array = ['DIO' => 0,'jotaro' => 0,'kakyouin' => 0,'Polnareff' => 0,'Joseph' => 0];
    foreach($results as $item){
        switch($item['character']){
            case 'DIO':
            $count_array['DIO']++;
            break;
            case '承太郎':
            $count_array['jotaro']++;
            break;
            case '花京院':
            $count_array['kakyouin']++;
            break;
            case 'ポルナレフ':
            $count_array['Polnareff']++;
            break;
            case 'ジョセフ・ジョースター':
            $count_array['Joseph']++;
            break;
        }
    }

  
    echo 'ＤＩＯ様'.'   '.$count_array['DIO'].'票';
    echo '<br>';
    
    echo '承太郎'.'   '.$count_array['jotaro'].'票';
    echo '<br>';
    
    echo '花京院'.'   '.$count_array['kakyouin'].'票';
    echo '<br>';
    
    echo 'ポルナレフ'.'   '.$count_array['Polnareff'].'票';
    echo '<br>';
    
    echo 'ジョセフ・ジョースター'.'   '.$count_array['Joseph'].'票';
    
    ?>


    <!-- <?php foreach ($results as $result): ?>
        <p><?php echo h($result['gender']); ?></p>
        <p><?php echo h($result['age']); ?></p>
        <p><?php echo h($result['character']); ?></p>
        <p><?php echo h($result['kind']); ?></p>
        <p><?php echo h($result['shots']); ?></p>
        <hr>
        
    <?php endforeach; ?> -->
</body>
</html>

</div>

</body>
  <!-- footer -->
  <footer class="footer">
      <p class="copyWriter">&copy;Yumi Iwagaki</p>
    </footer>
    <!-- //footer -->
</html>