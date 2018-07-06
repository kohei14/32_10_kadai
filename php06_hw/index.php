<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8" name="viewport" content="width=device-width,initial-scale=1">
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
<form method="post" action="insert.php">
    <label>名前：<input type="text" name="name"></label><br>
    <label>Email：<input type="text" name="email"></label><br>
    <label>年齢：<input type="number" name="age"></label><br>
    <h1>お好みの写真を1枚ずつ選択してください</h1>
    <!-- 4枚の中から1枚ずつ好きな画像を選択 -->
    <select class="image-picker show-html" name="selected1">
        <option data-img-src="https://i.pinimg.com/564x/74/97/d2/7497d2452fc68aac7c2a8dfeb50e54bb.jpg" value="https://i.pinimg.com/564x/74/97/d2/7497d2452fc68aac7c2a8dfeb50e54bb.jpg"></option>
        <option data-img-src="https://i.pinimg.com/564x/f0/8c/93/f08c93b21d0495e69d8e06de52c3d550.jpg" value="https://i.pinimg.com/564x/f0/8c/93/f08c93b21d0495e69d8e06de52c3d550.jpg"></option>
        <option data-img-src="https://i.pinimg.com/564x/a5/c1/57/a5c157ec1f76ad0ab2e7272076ab51b6.jpg" value="https://i.pinimg.com/564x/a5/c1/57/a5c157ec1f76ad0ab2e7272076ab51b6.jpg"></option>
        <option data-img-src="https://i.pinimg.com/564x/7b/dd/82/7bdd82a5d0f258f8c69acfde00a67393.jpg" value="https://i.pinimg.com/564x/7b/dd/82/7bdd82a5d0f258f8c69acfde00a67393.jpg"></option>
    </select>
    <select class="image-picker show-html" name="selected2">
        <option data-img-src="https://i.pinimg.com/564x/11/76/0e/11760ee013c4a131671d964666570304.jpg" value="https://i.pinimg.com/564x/11/76/0e/11760ee013c4a131671d964666570304.jpg"></option>
        <option data-img-src="https://i.pinimg.com/564x/d0/2f/a7/d02fa756a780c07f34d1e16fda3cf1ee.jpg" value="https://i.pinimg.com/564x/d0/2f/a7/d02fa756a780c07f34d1e16fda3cf1ee.jpg"></option>
        <option data-img-src="https://i.pinimg.com/564x/d6/90/06/d690060d1ff57aaf89494d4967c4ba62.jpg" value="https://i.pinimg.com/564x/d6/90/06/d690060d1ff57aaf89494d4967c4ba62.jpg"></option>
        <option data-img-src="https://i.pinimg.com/564x/63/45/86/6345864b545f7b8352723a537ceeb685.jpg" value="https://i.pinimg.com/564x/63/45/86/6345864b545f7b8352723a537ceeb685.jpg"></option>
    </select>
    <select class="image-picker show-html" name="selected3">
        <option data-img-src="https://i.pinimg.com/564x/b6/c7/a1/b6c7a1303a942601c93caac0280dac5d.jpg" value="https://i.pinimg.com/564x/b6/c7/a1/b6c7a1303a942601c93caac0280dac5d.jpg"></option>
        <option data-img-src="https://i.pinimg.com/564x/42/da/b2/42dab2f431a2834be5ba17a17fcf5acf.jpg" value="https://i.pinimg.com/564x/42/da/b2/42dab2f431a2834be5ba17a17fcf5acf.jpg"></option>
        <option data-img-src="https://i.pinimg.com/564x/0a/94/c9/0a94c920d07b2e7d2342e6f37db556f3.jpg" value="https://i.pinimg.com/564x/0a/94/c9/0a94c920d07b2e7d2342e6f37db556f3.jpg"></option>
        <option data-img-src="https://i.pinimg.com/564x/f8/b2/5e/f8b25ee849f3e4dca9836d4de0d24e88.jpg" value="https://i.pinimg.com/564x/f8/b2/5e/f8b25ee849f3e4dca9836d4de0d24e88.jpg"></option>
    </select>
    <div class="send-wrapper">
        <input class="send" type="submit" value="Send">
    </div>
</form>
<!-- Main[End] -->

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
<!-- Image Pickerのライブラリを使用（https://rvera.github.io/image-picker/） -->
<script src="js/image-picker.min.js"></script>
<script>
    $("select").imagepicker()
</script> 


</body>
</html>
