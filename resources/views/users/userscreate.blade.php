<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>ユーザー登録</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        <h1>ユーザー登録画面</h1>
        <form action="/logs" method="POST">
            @csrf
            <div class="title">
                <h2>ユーザー名</h2>
                <input type="text" name="user[name]" placeholder="ユーザー名を入力してください"/>
            </div>
            <div class="body">
                <h2>メールアドレス登録</h2>
                <textarea name="user[email]" placeholder="メールアドレスを入力してください"></textarea>
                <h2>パスワード</h2>
                <input type="text" name="user[password]" placeholder="パスワードを入力してください"/>
            </div>
            <input type="submit" value="保存"/>
        </form>
        <div class="footer">
            <a href="/logs">戻る</a>
        </div>
    </body>
</html>