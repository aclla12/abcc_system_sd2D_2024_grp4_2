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
    
    

    </form>

    
    <div class="date">
    <form id="navigationForm">
        <h3>移動先を選択してください</h3>
        <label>
            <p><input type="radio" name="choice" value="op1" checked>通常配送</p>
        </label>
        <label>
            <p><input type="radio" name="choice" value="{{ route('datetime') }}">日時指定</p>
        </label>
        <label>
            <p><input type="radio" name="choice" value="op3">即日配送<br><br>　（別途手数料）</p>
        </label>
        <button type="button" onclick="navigate()">移動</button>
    </form>
    <script>
        function navigate() {
            // 選択されているラジオボタンの値を取得
            const selectedValue = document.querySelector('input[name="choice"]:checked').value;
            // そのURLへ移動
            window.location.href = selectedValue;
        }
    </script>
    </div>

    <div class="pay">
    <p><h4>- お支払い方法 -</h4></p>
    <p>代引き(現金のみ)</p>
    </div>

    <form action={{ route('paymentcompleted') }} method="post" >
        @csrf
    <input type="submit" value="注文確定" class="btn">
    </form>
      
</body>
</html>