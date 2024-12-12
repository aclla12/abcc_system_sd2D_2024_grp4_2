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
            <h6>代引き発送となりますので<br><br>
            代金は商品到着後、配達員へお渡しください。</h6>
        </div>
        <form action={{ route('home')}} method="post" >
            @csrf
        <input type="submit"  value="ホームページ" ><br><br>
        </form>
        <form action= {{ route('mypage')}} method="post" >
            @csrf
        <input type="submit"  value="マイページ"><br><br>
        </form>
    </div>
</body>
</html>