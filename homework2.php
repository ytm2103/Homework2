
<?php
  // テキストボックスが空文字('')ならメッセージ
  if (($_POST['shots'] == '') || (!isset($_POST['shots']))) {
    echo "<P>データが未入力です。<BR />入力画面に戻ってください。</P>";
  } else {  // コマ数が入力されていたとき
    
    $gender = $_POST['gender'];
    $age    = $_POST['age'];
    $job    = $_POST['job'];
    $kind   = $_POST['kind'];
    $shots  = $_POST['shots'];
    // 回答内容の確認表示
    echo '<h2>ご回答内容</h2>';
    echo '性別 : '.$gender.'<BR />';
    echo '年代 : '.$age.'<BR />';
    echo '職業 : '.$job.'<BR />';
    echo 'カメラ種類 : '. $kind.'<BR />';
    echo '撮影枚数 : '.$shots. 'コマ程度<BR />';
    echo '<BR />';
    //  [書込]ボタンを表示（フォームの隠しフィールドで送る）
    echo '<FORM METHOD="POST" ACTION="thanks.php">';
    echo '<INPUT NAME="gender" type="hidden" value="'.$gender.'">';
    echo '<INPUT NAME="age" type="hidden" value="'.$age.'">';
    echo '<INPUT NAME="job" type="hidden" value="'.$job.'">';
    echo '<INPUT NAME="kind" type="hidden" value="'.$kind.'">';
    echo '<INPUT NAME="shots" type="hidden" value="'.$shots.'">';
    echo '<P>上記の内容でよろしければ、OKを押してください。</P>';
    echo '<INPUT TYPE="SUBMIT" VALUE="OK">';
    echo '&nbsp;';
    echo '</FORM>';
  }
  echo '<FORM>';      // 「戻る」ボタン
  echo '<INPUT TYPE="button" onclick="history.back()" value="戻る">';
  echo '</FORM>';
?>
