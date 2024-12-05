<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="{{ asset('css/reset.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/sty.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/updatepassword.css') }}" />
</head>
<body>
<h2 class="logo">STYLICO</h2>
<h2 class="title">Update Password</h2><br>
<h4>新しいパスワードを設定してください</h4><br>

<form action={{ route('login')}} method = "post">
    @csrf

<p>EMAIL(ログインID)</p>
<input type="text" name ="email">

<p>PASSWORD</p>
<input type="text" name = "password">

<button type = "submit">完了</button>
</form>
</body>
</html>

