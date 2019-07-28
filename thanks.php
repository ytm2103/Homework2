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
    require_once('function.php');
    require_once('dbconnect.php');

    $gender = $_POST['gender'];
    $age = $_POST['age'];
    $job = $_POST['job'];
    $kind = $_POST['kind'];
    $shots = $_POST['shots'];
    // SQLを実行
    $stmt = $dbh -> prepare('INSERT INTO Homework (gender, age, job, kind, shots) VALUES (?, ?, ?, ?, ?)');
    $stmt -> execute([$gender, $age, $job, $kind, $shots]);//?を変数に置き換えてSQLを実行
  } catch(PDOException $e) {  // 例外処理
    echo '障害によりご迷惑をおかけしています。<BR />';
    echo 'エラーの内容 : '.
          mb_convert_encoding($e->getMessage(), "UTF-8", "SJIS");

// var_dump($e); // デバッグ用

    echo $e->getCode();
  }
  $dbh = null;  // オブジェクトを破棄
?>
  <h4>ご回答ありがとうございました！</h4>
   <!-- 見るボタンを表示（フォームの隠しフィールドで送る） -->
   <?php
    echo '<FORM METHOD="POST" ACTION="view.php">';
    echo '<INPUT NAME="gender" type="hidden" value="'.$gender.'">';
    echo '<INPUT NAME="age" type="hidden" value="'.$age.'">';
    echo '<INPUT NAME="job" type="hidden" value="'.$job.'">';
    echo '<INPUT NAME="kind" type="hidden" value="'.$kind.'">';
    echo '<INPUT NAME="shots" type="hidden" value="'.$shots.'">';
    echo '<P>投票結果については、[見る]を押してください。</P>';
    echo '<INPUT TYPE="SUBMIT" VALUE="見る">';
    echo '&nbsp;';
    echo '</FORM>';
    ?>
  </BODY>
</HTML>
