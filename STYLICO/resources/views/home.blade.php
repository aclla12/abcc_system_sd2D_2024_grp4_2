<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="{{ asset('css/sty.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/home.css') }}" />
</head>
<body>
<h2 class="logo">STYLICO</h2>
<h2 class="title">Home Page</h2>




<h2>ONLINE STORE</h2>
<ul>
<li><a href="topsView">TOPS</a></li>
<li><a href="outerView">OUTER</a></li>
<li><a href="shirtView">SHIRT</a></li>

<li><a href="bottomView">BOTTOM</a></li>   
<li><a href="shoesView">SHOES</a></li>
<li><a href="bagView">BAG</a></li>

<li><a href="jewelryView">JEWELRY</a></li>   
<li><a href="perfumeView">PERFUME</a></li>
<li><a href="goodsView">GOODS</a></li>
</ul>

<form action={{ route('mypage') }} method = "post">@csrf
    <p><button type = "submit" class="mypage">MY PAGE☺</button></p>
</form>


<form action="#">@csrf
    <p><button type = "submit">SNAP</button></p>
</form>

<p>NEWS</p>
<h6>・ [2024/9/3更新]　悪天候に伴う配送への影響について。</h6>
<h6>・[2024/9/2更新]　なりすましにご注意ください。</h6>

<p>SHOPPING GUIDE</p>
<h6>・ ヘルプ/よくある質問</h6>
<h6>・サイトの機能に関するご意見・ご要望</h6>
<h6>・サービス利用規約</h6>


<form action={{ route('login') }} method="post">@csrf
    <p><button type = "submit">-LOGOUT-</button></p>
</form>
</body>
</html>
