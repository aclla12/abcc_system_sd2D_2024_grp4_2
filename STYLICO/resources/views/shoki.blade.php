<h2>STYLICO</h2>
<h1>WELCOME!</h1>
<br>
<form action= "{{route('newaccount')}}" method="post">
    @csrf
<input type = "submit" name = "newaccount" value = "新規作成"> <br><br>
</form>
<form action= "{{route('login') }}" method="post">
    @csrf
<input type = "submit" name = "login" value = "ログイン">
</form>