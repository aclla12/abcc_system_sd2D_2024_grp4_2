<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="{{ asset('css/sty.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/mypage.css') }}" />
</head>
<body>
<h2 class="logo">STYLICO</h2>
<h2 class="title">My Page</h2>
<h3>ACCOUNT</h3>
<h5>NAME :</h5>
<h5>ADDRESS : </h5>
<h5>STEAGE : </h5>
<h5>AVAILABLE POINT : </h5>
<h6>※ポイントの付与は、商品発送１か月後になります。</h6>
<h3 class="account">ACCOUNT</h3>
<h5 class="name">NAME : </h5>
<h5 class="add">ADDRESS : </h5>
<h5 class="steage">STEAGE : </h5>
<h5 class="point">AVAILABLE POINT : </h5>
<h6 class="mess">※ポイントの付与は、商品発送１か月後になります。</h6>

<li><a href="#" method = "get">FAVORITE ITEM</a></li>

<li><a href="#" method = "get">ORDER HISTORY</a></li>

<li><a href="{{ route('mysize.edit') }}" method = "get">MY SIZE</a></li>

<li><a href="{{ route('updateaccount') }}" method = "get">UPDATE ACCOUNT</a></li>

<li><a href="#" method = "get">LOGOUT</a></li>

<li><a href="{{ route('deleteaccount') }}" method = "get">DELETE ACCOUNT</a></li>


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
