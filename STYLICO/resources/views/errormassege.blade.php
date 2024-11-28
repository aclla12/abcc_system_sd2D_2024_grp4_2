<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="{{ asset('css/sty.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/errormassege.css') }}" />
</head>
<body>
<h2 class="logo">STYLICO</h2>
<h2 class="title">Error</h2>
<h3>入力エラーがあります</h3>
<h5>ログインIDまたはパスワードが違います。</h5>
<h5>再度ログインしなおすか</h5>
<h5>新規登録を行ってください</h5>

<form action="{{ route('login')}}" method = "post">
    @csrf
    <button type = "submit">再ログイン</button>
</form>

<form action="{{ route('newaccont') }}" method = "post">
    @csrf
    <button type = "submit">新規登録</button>
</form>
</body>
</html>
