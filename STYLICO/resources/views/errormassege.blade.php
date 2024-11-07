<h2>STYLICO</h2>
<h2>Error</h2>
<h3>入力エラーがあります</h3>
<h5>ログインIDまたはパスワードが違います。</h5>
<h5>再度ログインしなおすか</h5>
<h5>新規登録を行ってください</h5>

<form action="{{ route('login')}}" method = "post">
    @csrf
    <button type = "submit">再ログイン</button>
</form>

<form action="{{ route('newaccont') }}" method = "post">
    @csrf
    <button type = "submit">新規登録</button>
</form>