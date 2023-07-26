<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Logs</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        <h1>title</h1>
        <div class="content">
            <div class="content__log">
                <h3>本文</h3>
                <p>{{ $gamescore->gamescore01}}</p>
            </div>
        </div>
        <div class="footer">
            <a href="/logs">戻る</a>
        </div>
    </body>
</html>