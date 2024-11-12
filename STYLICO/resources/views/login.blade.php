<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h2>STYLICO</h2>
<h2>Login.</h2>
<form action="{{ route('home') }}" method="post">
    @csrf
<h5>ログインID</h5>
<input type = "text" name = "loginid" >
<h5>パスワード</h5>
<input type="text" name = "passid" ><br><br>
<input type="submit" value="ログイン"><br><br>
<input type="checkbox">次回から自動ログインする<br><br><br>
<a href="#">パスワードを忘れた方へ→</a>
</form>
</body>
</html>