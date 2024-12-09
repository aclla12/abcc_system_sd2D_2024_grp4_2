<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <link rel="stylesheet" href="{{ asset('css/reset.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/sty.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/paymentcompleted.css') }}" />
</head>
<body>
    <h2 class="logo">STYLICO</h2>
    <h1>THANK YOU</h1>

    <div class="container">
        <div class="message">
        <h3>お支払いが完了しました！</h3>
            現金\コンビニ払いを選択された方には<br>
            登録されたメールアドレスに<br>
            払い込み表をお送りいたします
        </div>
        <a href={{route('home')}} class="button">ホームページ</a>
        <a href={{route('mypage')}} class="button">マイページ</a>
    </div>
</body>
</html>