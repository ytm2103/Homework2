<!DOCTYPE html>
<HTML>
<HEAD>
<META http-equiv="Content-Type" content="text/html; charset=UTF-8">
<TITLe>example10-2</TITLE>
</HEAD>
<BODY>
  <H2>JOJOの名言</H2>
  <H3>JOJOの名言に関するアンケート</H3>

<?php
  try {
    $dsn = 'mysql:host=localhost;dbname=Homework2;charset=utf8';
    $user = 'root';
    $password = '';
    // PDOを生成    
    $dbh = new PDO($dsn, $user, $password);
    // 隠しフォームの値を変数に保存
    $gender = $_POST['gender'];
    $age = $_POST['age'];
    $job = $_POST['job'];
    $kind = $_POST['kind'];
    $shots = $_POST['shots'];

    echo 'ご回答ありがとうございました。<br />';

    // SQL文を作成（,"'の対応に注意！）
    $sql = 'INSERT INTO Homework(性別,年代,職業,種類,撮影枚数)
            VALUES("'.$gender.'","'.$age.'","'
            .$job.'","'.$kind.'",'.$shots.');';

// print $sql; // デバッグ用

    // SQLを実行
    $stmt = $dbh -> prepare('INSERT INTO Homework (gender, age, job, kind, shots) VALUES (?, ?, ?, ?, ?)');
    $stmt -> execute([$gender, $age, $job, $kind, $shots````]);//?を変数に置き換えてSQLを実行
  } catch(PDOException $e) {  // 例外処理
    echo '障害によりご迷惑をおかけしています。<BR />';
    echo 'エラーの内容 : '.
          mb_convert_encoding($e->getMessage(), "UTF-8", "SJIS");

// var_dump($e); // デバッグ用

    echo $e->getCode();
  }
  $dbh = null;  // オブジェクトを破棄
?>
  </BODY>
</HTML>
