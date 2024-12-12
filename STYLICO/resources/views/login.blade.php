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
<form action={{ route('authenticate') }} method="post">
    @csrf
<div>
    <h5 class="login_id">ログインID</h5>
    <input type = "email" class="login_id" name = "loginid" required>
</div>

<div>
    <h5 class="pass">パスワード</h5>
    <input type="password" class="pass" name = "password" required>
</div>

<br><br>
<input type="submit" class="login" value="ログイン" name="login"><br><br>
<input type="checkbox" class="checkbox"><h5 class="checkbox">次回から自動ログインする</h5>
<a href="{{ route('updatepassword') }}">パスワードを忘れた方へ→</a>
</form>
@if(session('erroe'))
<div>{{ session('error') }}</div>
@endif
</body>
</html>