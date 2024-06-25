<?php
require_once('funcs.php');
//1.  DB接続します
try {
  //ID:'root', Password: xamppは 空白 ''
  $pdo = new PDO('mysql:dbname=kadai08_db1;charset=utf8;host=localhost', 'root', '');
} catch (PDOException $e) {
  exit('DBConnectError:'.$e->getMessage());
}

//２．データ登録SQL作成
$stmt = $pdo->prepare("SELECT * FROM kadai08_db1_table");
$status = $stmt->execute();

//３．データ表示
$view = "";
if($status == false) {
  //execute（SQL実行時にエラーがある場合）
  $error = $stmt->errorInfo();
  exit("ErrorQuery:".$error[2]);
}else{
  while($result = $stmt->fetch(PDO::FETCH_ASSOC)){
    $view .= '<p>';
    $view .= h($result['date']) . ' ' . h($result['kikkake']) . ' ' . h($result['notomeru']) . ' ' . h($result['kako']) . ' ' . h($result['sonota']);
    $view .= '</p>';
  }
}

?>

 <!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>アンケート結果一覧</title>
<style>

  div{padding: 10px;font-size:16px;}

</style>
</head>
<body id="main">

<header>
  <nav class="navbar navbar-default">
    <div class="container-fluid">
      <div class="navbar-header">
      <a class="navbar-brand" href="index.php">データ登録</a>
      </div>
    </div>
  </nav>
</header>

<div>
    <div class="container jumbotron"><?= $view ?></div>
</div>

</body>
</html> 