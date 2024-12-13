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
    @foreach ($products as $product)
    <form method="POST" action="{{ route('cart.add') }}">
       @csrf
        <input type="hidden" name="product_id" value="{{ $product->id }}">
        <button type="submit">{{ $product->name }}</button>
    </form>
    @endforeach

    <form action="{{ route('payment') }}" method = "post">
        @csrf
    <h2 class="logo">STYLICO</h2>
    <h2 class="title">CART</h2>
    <p><h6>商品番号</h6></p>
    <p><h6>データベースから商品名</h6></p>
    <p><h6>DBから色／サイズ</h6></p>
    <p><h6>DBから価格 税込</h6></p>
    <p><h6>数量: DBから数量</h6></p>
    <script src = "https://cdn.jsdeliver.net/npm/vue@2.7.14/dist/vue.js"></script>
    <script src = "{{ asset('js/script.js')}}"></script>

    @if (session('success'))
    <p style="color: green;">{{ session('success') }}</p>
    @endif
    
    <button type = "submit" class="btn">支払いへ進む</button>
</form>

<div class="footer">
MENU 
<form action={{ route('home') }} method = "post">
    @csrf
    <button type = "submit" class="home">🏠</button>
</form>
            
<form action={{ route('mypage') }} method = "post">
    @csrf
    <button type = "submit">👤</button>
</form>

<form action={{ route('cart') }} method = "post">
    @csrf
    <button type = "submit">🛒</button>
</form>
</div>

</body>
</html>