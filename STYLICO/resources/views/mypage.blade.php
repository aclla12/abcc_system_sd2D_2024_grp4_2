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

<h3 class="account">ACCOUNT</h3>
<h5 class="name">NAME :  {{ $user->user_name }}
<h5 class="add">ADDRESS :  {{ $user->user_add}} {{ $user->address_detail}}
</h5>
<h5 class="steage">STEAGE : -BASIC STAGE-</h5>
<h5 class="point">AVAILABLE POINT : 0pt</h5>
<h6 class="mess">※ポイントの付与は、商品発送１か月後になります。</h6>

<li><a href="{{ route('favorite.get') }}" method = "get" class="favorite">FAVORITE ITEM</a></li>

<li><a href="{{ route('orderhistory') }}" method = "get" class="order">ORDER HISTORY</a></li>

<li><a href="{{ route('mysize.edit') }}" method = "get" class="size">MY SIZE ▶</a></li>

<li><a href="{{ route('updateaccount') }}" method = "get" class="update">UPDATE ACCOUNT</a></li>

<li><a href="#" method = "get" class="logout">LOGOUT</a></li>

<li><a href="{{ route('deleteaccount') }}" method = "post" class="delete">DELETE ACCOUNT</a></li>


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
