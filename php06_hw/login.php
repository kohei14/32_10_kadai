<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="login.css">
</head>
<body>
<div class="login-page">
    <div class="form">
        <!-- ログインフォームの作成 -->
        <form class="login-form"  name="form1" action="login_act.php" method="post">
            <!-- inputは"others"と"sex"の2つのクラスを付与 -->
            <input class="others" type="text" name="lid" placeholder="username">
            <input class="others" type="password" name="lpw" placeholder="password">
            <!-- ボタン押下でselect.phpに情報を引き継ぐ -->
            <input class="continue" type="submit" value="LOGIN" />
        </form>
    </div>
</div>
</body>
</html>