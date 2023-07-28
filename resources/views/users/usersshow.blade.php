<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>ユーザー一覧画面</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        <h1>ユーザー一覧</h1>
        <div class='users'>
            @foreach ($users as $user)
                <div class='user'>
                    <p class='body'>{{ $user->name }}</p>
                </div>
            @endforeach
        </div>
        <a href='/logs/usercreate'>ユーザー登録</a>
    </body>
</html>