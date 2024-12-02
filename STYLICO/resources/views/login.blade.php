<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="{{ asset('css/sty.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/login.css') }}" />
</head>
<body>
<h2 class="logo">STYLICO</h2>
<h2 class="login">Login.</h2>

<form action={{ route('home') }} method="post">
    @csrf
<h5 class="login_id">ログインID</h5>
<input type = "text" class="login_id" name = "loginid" >

<h5>パスワード</h5>
<input type="text" name = "passid" ><br><br>
<input type="submit" value="ログイン"><br><br>

<h5><input type="checkbox">次回から自動ログインする</h5>


<a href="updatepasswordView">パスワードを忘れた方へ→</a>
</form>
</body>
</html>