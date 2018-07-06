<?php
include("functions.php");
//1.POSTでParamを取得
$id     = $_POST["id"];
$name   = $_POST["selected1"];
$email  = $_POST["selected2"];
$naiyou = $_POST["selected3"];

//2.DB接続など
$pdo = db_con();

//3.UPDATE gs_an_table SET ....; で更新(bindValue)
//　基本的にinsert.phpの処理の流れです。
$stmt = $pdo->prepare("UPDATE picture_table SET selected1=:selected1, selected2=:selected2, selected3=:selected3 WHERE id=:id");
$stmt->bindValue(':selected1',  $selected1,   PDO::PARAM_STR);
$stmt->bindValue(':selected2', $selected2,  PDO::PARAM_STR);
$stmt->bindValue(':selected3',$selected3, PDO::PARAM_STR);
$stmt->bindValue(':id',$id, PDO::PARAM_INT);
$status = $stmt->execute();

if($status==false){
  queryError($stmt);
}else{
  header("Location: select.php");
  exit;
}

?>
