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

<div class="search">
<form action="{{route('search.index')}}" method = "get">
        @csrf
        <input type="text" name="query" placeholder="検索キーワード" class="c">
        <button type="submit">検索</button>
</form>
</div>

<h2 class="store">ONLINE STORE</h2>
<ul>
<li><a href="{{ route('tops.post', ['product_id' => 'Bag_055_BLK']) }}" method = "get">TOPS</a></li>
<li><a href="{{ route('outer.post') }}" method = "get">OUTER</a></li>
<li><a href="{{ route('shirt.post') }}" method = "get">SHIRT</a></li>
<li><a href="{{ route('bottom.post') }}" method = "get">BOTTOM</a></li>   
</ul>

<a href="{{ route('mypage') }}" class="mypage">MY PAGE ▶</a>


<div class="news">
<p>NEWS</p>
<h6>・ [2024/9/3更新]　悪天候に伴う配送への影響について。</h6>
<h6>・[2024/9/2更新]　なりすましにご注意ください。</h6>
</div>

<div class="guide">
<p>SHOPPING GUIDE</p>
<h6>・ ヘルプ/よくある質問</h6>
<h6>・サイトの機能に関するご意見・ご要望</h6>
<h6>・サービス利用規約</h6>
</div>

<a href="{{ route('login')}}" class="logout">- LOGOUT -</a>
</body>
</html>
