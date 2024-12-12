<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="{{ asset('css/reset.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/sty.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/updateaccount.css') }}" />
</head>
<body>
<h2 class="logo">STYLICO</h2>
<h2 class="title">Update Account</h2>

<!-- 成功時メッセージの表示　-->

@if (session('message'))
<p>{{ session('message') }}</p>
@endif

<form action= {{route('home')}} method = "post">
    @csrf
    <div class="email">
<h5>EMAIL(ログインID)</h5>
<p><input type="text" name="email"></p>
</div>

<div class="pass">
<h5>PASSWORD</h5>
<p><input type="text" name="password"></p>
</div>

<div class="name">
<h5>NAME</h5>
<p><input type="text" name="name"></p>
</div>

<div class="birthday">
<h5>YYYY/MM/DD</h5>
<p><input type="text" name="birthday"></p>
</div>

<div class="add">
<h5>ADDRESS</h5>
<p><input type="text" name="addnum"></p>
<p><textarea name="address" rows="4" cols="50"></textarea></p>
</div>

<div class="number">
<h5>NUMBER</h5>
<p><input type="text" name="number"></p>
</div>

<div class="gender">
<h5>GENDER</h5>
<p><input type="radio" name="gender" value="man">MAN</p>
<p><input type="radio" name="gender" value="woman">WOMAN</p>
<p><input type="radio" name="gender" value="other">OTHER</p>
</div>

<input type = "submit" value = "update" name="signin" class="btn">
<a href="{{ route('mypage')}}">マイページに戻る</a>

</form>
</body>
</html>