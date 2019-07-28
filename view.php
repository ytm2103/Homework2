<?php
    require_once('function.php');
    require_once('dbconnect.php');

    //SQLを実行
    $stmt = $dbh->prepare('SELECT * FROM Homework');
    $stmt->execute();
    $results = $stmt->fetchAll();
    $count_array = ['man' => 0,'woman' => 0];
    foreach($results as $item){
        switch($item['gender']){
            case '男':
            $count_array['man']++;
            break;
            case '女':
            $count_array['woman']++;
            break;
        }
    }


    echo $count_array['man'];
    echo '<br>';
    echo $count_array['woman'];

    
?>


<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="utf-8">
    <title>投票結果</title>
</head>
<body>
<!-- //画面に表示する -->
<!-- PHP基本構文 -->
 
 <!-- $alpha = ['E', 'A', 'D', 'B', 'A', 'C', 'A', 'B', 'E', 'E', 'A', 'A', 'C'];
 $i = 0;

foreach ($alpha as $v) {
    if ($v === 'A') {
        $i++;
    }
} -->


    <?php foreach ($results as $result): ?>
        <p><?php echo h($result['gender']); ?></p>
        <p><?php echo h($result['age']); ?></p>
        <p><?php echo h($result['charactor']); ?></p>
        <p><?php echo h($result['kind']); ?></p>
        <p><?php echo h($result['shots']); ?></p>
        <hr>
        
    <?php endforeach; ?>
</body>
</html>