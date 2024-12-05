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
    <h2 class="title">TOPS</h2>

    <form action="#" method = "post">
        @csrf
    <fieldset>
        <input type="text" name = "search" >
    </fieldset>
    </form>

    <a href="{{ route('home') }}">ホームページに戻る</a><br>

    <img src="{{ asset($image->image_path) }}" alt="Not Image">
    
</body>
</html>