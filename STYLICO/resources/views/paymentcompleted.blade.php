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
            <h6>現金/コンビニ払いを選択された方には<br><br>
            登録されたメールアドレスに払い込み表をお送りいたします</h6>
        </div>
        <input type="submit"  value="ホームページ" {{ route('home')}}><br><br>
        <input type="submit"  value="マイページ" {{ route('mypage')}}><br><br>
    </div>
</body>
</html>