<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <link rel="stylesheet" href="{{ asset('css/reset.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/sty.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/payment.css') }}" />
</head>
<body>
    <h2 class="logo">STYLICO</h2>
    <h2 class="title">Payment</h2>

    <div class="pay">
    <p><h4>- お支払い方法 -</h4></p>
    <p><input type="radio" name="pay" value="cash">現金/コンビニ払い</p>
    <p><input type="radio" name="pay" value="card">クレジットカード</p>
    </div>

    <div class="card">
    <h4>- カード情報登録 -</h4>
    <p>カード番号: <input type="text" name="cardno"></p>
    <p>セキュリティコード: <input type="text" name="securitycord"></p>
    <p>有効期限: <input type="text" name="month"> 月 　<input type="text" name="year"> 年</p>
    <p>名義人: <input type="text" name="name"></p>
    </div>

    <form action="{{ route('paymentcompleted') }}" >
    <input type="submit" value="注文確定" class="btn">
    </form>
      
</body>
</html>