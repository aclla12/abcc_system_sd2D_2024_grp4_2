<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="{{ asset('css/sty.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/orderhistory.css') }}" />
</head>
<body>
<h2 class="logo">STYLICO</h2>
<h2 class="title">Order History</h2>
<h3>- 発送前 -</h3>

<fieldset>
    <h6>注文日：</h6>
    <h6>商品番号：</h6>
    画像画像画像画像    
    画像画像画像画像    
    画像画像画像画像    
    画像画像画像画像
    画像画像画像画像
    画像画像画像画像
</fieldset>


<h3>- 発送後 -</h3>

<fieldset>
    <h6>注文日：</h6>
    <h6>商品番号：</h6>
    画像画像画像画像
    画像画像画像画像
    画像画像画像画像
    画像画像画像画像
    画像画像画像画像
    画像画像画像画像
</fieldset>

<fieldset>
    <h6>注文日：</h6>
    <h6>商品番号：</h6>
    画像画像画像画像
    画像画像画像画像
    画像画像画像画像
    画像画像画像画像
    画像画像画像画像
    画像画像画像画像
</fieldset>

<h4>view more...</h4>


MENU <form action="homepage" method = "post">
    @csrf
        <button type = "submit">🏠</button>
            <form action="mypage" method = "post">
                <button type = "submit">☺</button>
                    <form action="#" method = "post">
                        <button type = "submit">🛒</button>
                    </form>
            </form>
    </form>
</body>
</html>