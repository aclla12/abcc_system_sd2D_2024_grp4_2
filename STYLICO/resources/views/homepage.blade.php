<!DOCTYPE html>
<html lang="jan">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h2>STYLICO</h2>
<h5>Home Page</h5>

<form action = "{{ route('') }}" method = "post">
<fieldset>
    <input type="text" name = "search" >
</fieldset>
</form>

<h2>ONLINE STORE</h2>

<form action = "{{ route('') }}" method = "post">@csrf
    <button type = "submit">TOPS</button>
        <form action = "{{ route('') }}" method = "post">@csrf
            <button type = "submit">OUTER</button>
                <form action = "{{ route('') }}" method = "post">@csrf
                    <button type = "submit">SHIRT</button>
                </form>
        </form>
</form><br><br>

<form action = "{{ route('') }}" method = "post">@csrf
    <button type = "submit">BOTTOM</button>
        <form action = "{{ route('') }}" method = "post">@csrf
            <button type = "submit">SHOES</button>
                <form action = "{{ route('') }}" method = "post">@csrf
                    <button type = "submit">BAG</button>
                </form>
        </form>
</form><br><br>

<form action = "{{ route('') }}" method = "post">@csrf
    <button type = "submit">JEWWELRY</button>
        <form action = "{{ route('') }}" method = "post">@csrf
            <button type = "submit">PERFUME</button>
                <form action = "{{ route('') }}" method = "post">@csrf
                    <button type = "submit">GOODS</button>
                </form>
        </form>
</form><br><br>

<form action="{{ route('') }}" method = "post">@csrf
    <p><button type = "submit">MY PAGE☺</button></p>
</form>

<form action="{{ route('') }}">@csrf
    <p><button type = "submit">SNAP</button></p>
</form>

<p>NEWS</p>
<h6>・ [2024/9/3更新]　悪天候に伴う配送への影響について。</h6>
<h6>・[2024/9/2更新]　なりすましにご注意ください。</h6>

<p>SHOPPING GUIDE</p>
<h6>・ ヘルプ/よくある質問</h6>
<h6>・サイトの機能に関するご意見・ご要望</h6>
<h6>・サービス利用規約</h6>

<form action="{{ route('') }}">@csrf
    <p><button type = "submit">-LOGOUT-</button></p>
</form>
</body>
</html>
