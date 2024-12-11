<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <link rel="stylesheet" href="{{ asset('css/reset.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/sty.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/tops.css') }}" />
</head>
<body>
    <h2 class="logo">STYLICO</h2>
    <h2 class="title">TOPS</h2>

    <form action="#" method = "post">
        @csrf
    <fieldset>
        <input type="text" name = "search" >
    </fieldset>
    </form>

    <a href="{{ route('home') }}">ホームページに戻る</a><br>

   {{-- @foreach ($product as $product)
        @if(isset($product->image_base64) && $product->image_base64)
        <img src="{{ $product->image_base64}}" alt="{{ $product->product_name}}">
        @else
        <p>画像無し</p>
        @endif
    @endforeach--}}
    
    @foreach($products as $product)
    @if($product -> image_base64)
    <img src="{{ $product->image_base64}}" alt="{{ $product -> product_name}}">
    @else
    <p>画像無し</p>
    @endif
    @endforeach

    {{--@foreach
    @if (isset($mimeType) && isset($base64Image))
    <img src="data:{{ $mimeType }};base64,{{ $base64Image }}" alt="Image">
    <p>{{$products->product_name}}</p>
    @else
    <img src="" alt="not image" >
    @endif
    @endforeach--}}

    <p>{{$products->product_name}}</p>

    

    {{--<img src="{{ asset($image->image_path) }}" alt="Not Image">--}}
    
</body>
</html>