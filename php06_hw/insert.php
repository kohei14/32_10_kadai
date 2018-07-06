<?php
include("functions.php");
//入力チェック(受信確認処理追加)
if(
  !isset($_POST["name"]) || $_POST["name"]=="" ||
  !isset($_POST["email"]) || $_POST["email"]=="" ||
  !isset($_POST["age"]) || $_POST["age"]=="" ||
  !isset($_POST["selected1"]) || $_POST["selected1"]=="" ||
  !isset($_POST["selected2"]) || $_POST["selected2"]=="" ||
  !isset($_POST["selected3"]) || $_POST["selected3"]==""
){
  exit('ParamError');
}

//1. POSTデータ取得
$name       = $_POST["name"];
$email      = $_POST["email"];
$age        = $_POST["age"];
$selected1  = $_POST["selected1"];
$selected2  = $_POST["selected2"];
$selected3  = $_POST["selected3"];

//2. DB接続します(エラー処理追加)
$pdo = db_con();

//３．データ登録SQL作成
$stmt = $pdo->prepare("INSERT INTO picture_table(id, name, email, age, selected1, selected2, selected3,
indate )VALUES(NULL, :a1, :a2, :a3, :a4, :a5, :a6, sysdate())");
$stmt->bindValue(':a1', $name,       PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':a2', $email,      PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':a3', $age,        PDO::PARAM_INT);  //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':a4', $selected1,  PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':a5', $selected2,  PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':a6', $selected3,  PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
$status = $stmt->execute();

//４．データ登録処理後
if($status==false){
  queryError($stmt);

}else{
  //５．index.phpへリダイレクト
  header("Location: index.php");
  exit;
}
?>
