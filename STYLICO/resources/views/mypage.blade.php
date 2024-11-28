<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="{{ asset('css/sty.css') }}" />

</head>
<body>
<h2 class="logo">STYLICO</h2>
<h2>My Page</h2>
<h3>ACCOUNT</h3>
<h5>NAME : </h5>
<h5>ADDRESS : </h5>
<h5>STEAGE : </h5>
<h5>AVAILABLE POINT : </h5>
<h6>※ポイントの付与は、商品発送１か月後になります。</h6>

<form action="#">
<button type = "submit" >FAVORITE ITEM</button>
</form>

<form action= "#">
@csrf
<button type = "submit" >ORDER HISTORY</button>
</form>

<form action={{ route('mysize.edit') }} method = "get">
@csrf
<button type = "submit" >MY SIZE</button>
</form>

<form action={{ route('updateaccount') }} method = "post">
@csrf
<button type = "submit" >UPDATE ACCOUNT</button>
</form>

<form action="#">
<button type = "submit" >LOGOUT</button>
</form>

<form action="{{ route('deleteaccount') }}" method = "post">
<button type = "submit" >DELETE ACCOUNT</button>
</form>

MENU <form action={{ route('home') }} method = "post">
    @csrf
        <button type = "submit">🏠</button>
        </form>
            <form action={{ route('mypage') }} method = "post">
                @csrf
                <button type = "submit">👤</button>
            </form>
                    <form action={{ route('cart') }} method = "post">
                        @csrf
                        <button type = "submit">🛒</button>
                    </form>
            </form>
    </form>

</body>
</html>
