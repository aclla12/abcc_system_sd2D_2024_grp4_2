<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <link rel="stylesheet" href="{{ asset('css/reset.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/sty.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/tops.css') }}" />
</head>
<body>
    <h2 class="logo">STYLICO</h2>
    <h2 class="title">検索結果</h2>

    <form action="{{route('search.index')}}" method = "get">
        @csrf
        <input type="text" name="query" placeholder="検索キーワード">
        <button type="submit">検索</button>
    </form>


    <a href="{{ route('home') }}" class="home">ホームページに戻る</a><br>

    
</body>
</html>