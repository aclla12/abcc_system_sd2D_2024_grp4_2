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

    <p><h4>- お届け日時 -</h4></p>
    <form action={{ route('datetime') }} method = "post">@csrf
    <p><input type="radio" name="choice" value="op1">通常配送</p>
    <p><input type="radio" name="choice" value="op2">日時指定</p>
    <p><input type="radio" name="choice" value="op3">即日配送（別途手数料あり）</p>
    </form>

    

    <form id="navigationForm">
        <h3>移動先を選択してください</h3>
        <label>
            <input type="radio">
            通常配送
        </label><br>
        <label>
            <input type="radio" name="destination" value="{{ route('datetime') }}">
            日時指定配送
        </label><br>
        <label>
            <input type="radio">
            即日配送
        </label><br>
        <button type="button" onclick="navigate()">移動</button>
    </form>
    <script>
        function navigate() {
            // 選択されているラジオボタンの値を取得
            const selectedValue = document.querySelector('input[name="destination"]:checked').value;
            // そのURLへ移動
            window.location.href = selectedValue;
        }
    </script>

    <p><h4>- お支払い方法 -</h4></p>
    <p><input type="radio" name="choice2" value="opt1">現金/コンビニ払い</p>
    <p><input type="radio" name="choice2" value="opt2">クレジットカード</p>

    <p><h4>- カード情報登録 -</h4></p>
    <p>カード番号: <input type="text" name="cardno"></p>
    <p>セキュリティコード: <input type="text" name="securitycord"></p>
    <p>有効期限: <input type="text" name="month">月 <input type="text" name="year"></p>
    <p>名義人: <input type="text" name="name"></p>

    <form action={{ route('paymentcompleted') }} method="post" >
    <input type="submit" value="注文確定">
    </form>
      
</body>
</html>