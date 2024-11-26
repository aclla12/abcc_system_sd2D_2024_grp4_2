<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="{{ asset('css/sty.css') }}" />

</head>
<body>
<h2 class="logo">STYLICO</h2><br><br>
<h2>ErrorSpecify Delivery Date</h2><br><br>
<h3>- 配達時間を選択 -</h3><br><br>

    @foreach ($dates as $date)
        <button>{{$date->format('y-m-d')}}</button>
    @endforeach

<input type="submit" value="日時確定"><br><br>
</body>