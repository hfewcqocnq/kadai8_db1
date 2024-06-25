<?php

//1. POSTデータ取得
$kikkake = $_POST["kikkake"];
$motomeru = $_POST["motomeru"];
$kako = $_POST["kako"];
$sonota = $_POST["sonota"];

//2. DB接続します
try {
  //ID:'root', Password: xamppは 空白 ''
  $pdo = new PDO('mysql:dbname=kadai08_db1;charset=utf8;host=localhost', 'root', '');
} catch (PDOException $e) {
  exit('DBConnectError:'.$e->getMessage());
}

//３．データ登録SQL作成
$stmt = $pdo->prepare('INSERT INTO
              kadai08_db1_table ( id, kikkake, motomeru, kako, sonota, date )
              VALUES( NULL, :kikkake, :motomeru, :kako, :sonota, now() ) ');

//  2. バインド変数を用意
// Integer 数値の場合 PDO::PARAM_INT
// String文字列の場合 PDO::PARAM_STR
$stmt->bindValue(':kikkake', $kikkake, PDO::PARAM_STR);
$stmt->bindValue(':motomeru', $motomeru, PDO::PARAM_STR);
$stmt->bindValue(':kako', $kako, PDO::PARAM_STR);
$stmt->bindValue(':sonota', $sonota, PDO::PARAM_STR);

//  3. 実行
$status = $stmt->execute();

//４．データ登録処理後
if($status === false) {
  //SQL実行時にエラーがある場合（エラーオブジェクト取得して表示）
  $error = $stmt->errorInfo();
  exit('ErrorMessage:'.$error[2]);
} else {
  //５．result.phpへリダイレクト
  header('Location: result.php');

}
?>