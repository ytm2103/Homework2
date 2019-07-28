<?php
    require_once('function.php');
    require_once('dbconnect.php');

    //SQLを実行
    $stmt = $dbh->prepare('SELECT * FROM Homework');
    $stmt->execute();
    $results = $stmt->fetchAll();

    echo '<pre>';
    var_dump ($results);
    exit; 
?>


<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="utf-8">
    <title>投票結果</title>
</head>
<body>
<!-- //画面に表示する -->
    <?php foreach ($results as $result): ?>
        <p><?php echo h($result['gender']); ?></p>
        <p><?php echo h($result['age']); ?></p>
        <p><?php echo h($result['job']); ?></p>
        <p><?php echo h($result['kind']); ?></p>
        <p><?php echo h($result['shots']); ?></p>
        <hr>
        
    <?php endforeach; ?>
</body>
</html>