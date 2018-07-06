<?php
session_start();
include("functions.php");
chk_ssid(); //includeのあとじゃないと関数は実行できない

//1.GETでidを取得
if(!isset($_GET["id"])){
  exit("Error");
};

$id = $_GET["id"];

//2.DB接続など
$pdo = db_con();

//3.SELECT * FROM gs_an_table WHERE id=***; を取得（bindValueを使用！）
$stmt = $pdo->prepare("SELECT * FROM picture_table WHERE id=:id");
$stmt->bindValue(":id",$id,PDO::PARAM_INT);
$status = $stmt->execute();

if($status==false){
  queryError($stmt);
}else{
  $row = $stmt->fetch();
}

?>
<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>POSTデータ登録</title>
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="css/index.css">
  <link rel="stylesheet" href="css/image-picker.css">
</head>
<body>

<!-- Head[Start] -->
<header>
  <nav class="navbar navbar-default">
    <div class="container-fluid">
    <div class="navbar-header"><a class="navbar-brand" href="select.php">データ一覧</a></div>
  </nav>
</header>
<!-- Head[End] -->

<!-- Main[Start] -->
  <div class="jumbotron">
   <fieldset>
      <img width=290px height=435px src="<?=$row["selected1"]?>">  
      <img width=290px height=435px src="<?=$row["selected2"]?>">  
      <img width=290px height=435px src="<?=$row["selected3"]?>">  
  </div>
<!-- Main[End] -->

</body>
</html>






