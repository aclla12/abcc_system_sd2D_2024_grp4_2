<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
    
    <link rel="stylesheet" href="{{ asset('css/sty.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/shoki.css') }}"/>
</head>
<body>
<h2 class="logo">STYLICO</h2>
<h1>WELCOME!</h1>
<br>
<form action= {{route('newaccount')}} method="post">
    @csrf
<input type = "submit" class="button1" name = "newaccount" value = "新規作成"> <br><br>
</form>
<form action= {{ route('login') }} method="post">
    @csrf
<input type = "submit" class="button2" name = "login" value = "ログイン">
</form>
</body>
</html>