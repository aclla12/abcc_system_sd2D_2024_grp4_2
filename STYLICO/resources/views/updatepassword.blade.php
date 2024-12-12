<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="{{ asset('css/reset.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/sty.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/updatepasswaord.css') }}" />
</head>
<body>
<h2 class="logo">STYLICO</h2>
<h2 class="title">Update Password</h2><br>
<h4>新しいパスワードを設定してください</h4><br>

<form action={{ route('login')}} method = "post">
    @csrf

<p>EMAIL(ログインID)</p>
<input type="text" name ="email" class="b">

<p>PASSWORD</p>
<input type="text" name = "password" class="b">

<input type = "submit" name = "pass" value="完了" class="a">
</form>
</body> 
</html>

