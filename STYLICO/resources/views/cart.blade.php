<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="{{ asset('css/reset.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/sty.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/cart.css') }}" />
</head>
<body>

    <form action="#" method = "post">
    <h2 class="logo">STYLICO</h2>
    <h2>CART</h2>
    <p><h6>商品番号</h6></p>
    <p><h6>データベースから商品名</h6></p>
    <p><h6>DBから色／サイズ</h6></p>
    <p><h6>DBから価格 税込</h6></p>
    <p><h6>数量: DBから数量</h6></p>
    <script src = "https://cdn.jsdeliver.net/npm/vue@2.7.14/dist/vue.js"></script>
    <script src = "{{ asset('js/script.js')}}"></script>
    
    <button type = "submit">支払いへ進む</button>
</form>

    MENU <form action={{route('home')}} method = "post">
    @csrf
        <button type = "submit">🏠</button></form>
            <form action={{route('mypage')}} method = "post">
                @csrf
                <button type = "submit">👤</button></form>
                    <form action={{ route('cart') }} method = "post">
                        @csrf
                        <button type = "submit">🛒</button>
                    </form>
            </form>
    </form>
</body>
</html>