<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <link rel="stylesheet" href="{{ asset('css/reset.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/sty.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/deleteacount.css') }}" />
</head>
<body>
    <h2 class="logo">STYLICO</h2>

    <h2 class="title">DELETE ACCOUNT</h2>

    <form action={{ route('shoki') }} method = "get">
        @csrf
       <h3> 本当に削除しますか？</h3>
       <input type="submit" value="削除" name="delete">
    </form>
</body>
</html>