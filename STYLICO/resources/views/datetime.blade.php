<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h2>STYLICO</h2>
<h2>ErrorSpecify Delivery Date</h2>
<h3>- 配達時間を選択 -</h3><br>

<input type="submit" value="">
<input type="submit" value="">
<input type="submit" value="">
<input type="submit" value=""><br><br>

<input type="submit" value="午前中">
<input type="submit" value="14:00~16:00">
<input type="submit" value="16:00~18:00">
<input type="submit" value="18:00~20:00">
<input type="submit" value="20:00~22:00"><br><br>

<form action="{{ route('')}}" method = "post">
    @csrf
    <button type = "submit"></button>
</form>