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

<a href="topsView">TOPS</a>    <a href="outerView">OUTER</a>    <a href="shirtView">SHIRT</a><br>

<a href="bottomView">BOTTOM</a>   <a href="shoesView">SHOES</a>   <a href="bagView">BAG</a><br>

<a href="jewelryView">JEWELRY</a>   <a href="perfumeView">PERFUME</a>   <a href="goodsView">GOODS</a>


<form action={{ route('mypage') }} method = "post">@csrf
    <p><button type = "submit">MY PAGE☺</button></p>
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
