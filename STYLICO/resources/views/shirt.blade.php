<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <link rel="stylesheet" href="{{ asset('css/reset.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/sty.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/shirt.css') }}" />
</head>
<body>
    <h2 class="logo">STYLICO</h2>
    <h2 class="title">SHIRT</h2>

    <form action="{{route('search.index')}}" method = "get">
        @csrf
        <input type="text" name="query" placeholder="検索キーワード">
        <button type="submit">検索</button>
    </form>

    <div class="prduct">
    <hr>
    @forelse($products as $product)
    <h2>{{ $product->name }}</h2>
    @if(!empty($product->image_data))
        <img src="data:image/png;base64,{{ $product->image_data}}" alt="{{ $product->name}}">    
    @else
        <p>画像がありません</p>
    @endif
    <div class="prd">
    <p>{{ $product->product_name}}</p>
    <p>¥{{ $product->product_price}}</p>
    </div>
    <hr>

    @empty
    <p>該当する商品がありません。</p>
    @endforelse
    </div>
    
    <a href="{{ route('home') }}" class="home">ホームページに戻る</a><br>

    
</body>
</html>