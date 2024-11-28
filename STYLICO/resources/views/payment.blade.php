<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <link rel="stylesheet" href="{{ asset('css/sty.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/payment.css') }}" />
</head>
<body>
    <h2 class="logo">STYLICO</h2>
    <h2 class="title">Payment</h2>

    <form action= "#" method = "post">
    <p><h4>- お届け日時 -</h4></p>
    <p> <button type = "radio">通常配送</button></p>
    <form action={{ route('dates') }} method = "post">
    <p> <button type = "radio">日時配送</button></p>
    </form>
    <p> <button type = "radio">即日配送</button></p>

    <p><h4>- お支払い方法 -</h4></p>
    <p><button type = "radio">現金/コンビニ払い</button></p>
    <p><button type = "radio">クレジットカード</button></p>

    <p><h4>- カード情報登録 -</h4></p>
    <p>カード番号: <input type="text" name="cardno"></p>
    <p>セキュリティコード: <input type="text" name="securitycord"></p>
    <p>有効期限: <input type="text" name="month">月 <input type="text" name="year"></p>
    <p>名義人: <input type="text" name="name"></p>

    <input type="submit" value="注文確定">

    </form>
      
</body>
</html>