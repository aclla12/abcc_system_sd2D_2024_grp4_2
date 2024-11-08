<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h2>STYLICO</h2>
<h2>Update Password</h2><br>
<h4>新しいパスワードを設定してください</h4><br>

<form action="#" method = "post">
    @csrf

<p>EMAIL(ログインID)</p>
<input type="text" name ="email">

<p>PASSWORD</p>
<input type="text" name = "password">

<button type = "submit">完了</button>
</form>
</body>
</html>

