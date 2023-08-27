<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>MahjongLog</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        <div class='groupscore'>
            <p class='body'>{{ $groupscore->user("user01_id")->first()->name }} </p>
            <p class='body'>{{ $groupscore->sumgamescore01 }}</p>
            <p class='body'>{{ $groupscore->user("user02_id")->first()->name }} </p>
            <p class='body'>{{ $groupscore->sumgamescore02 }}</p>
            <p class='body'>{{ $groupscore->user("user03_id")->first()->name }} </p>
            <p class='body'>{{ $groupscore->sumgamescore03 }}</p>
            <p class='body'>{{ $groupscore->user("user04_id")->first()->name }} </p>
            <p class='body'>{{ $groupscore->sumgamescore04 }}</p>
        </div>
        <h1>点数記入</h1>
        <form action="/logs/{{ $groupscore->id }}" method="POST">
            @csrf
            <div class="title">
                <h2>プレイヤーA点数</h2>
                <input type="text" name="gamescore[user01_id]" value="{{ $groupscore->user("user01_id")->first()->id }}" readonly />
                <input type="text" name="gamescore[gamescore01]" placeholder="プレイヤーAの点数"/>
            </div>
            <div class="title">
                <h2>プレイヤーB点数</h2>
                <input type="text" name="gamescore[user02_id]" value="{{ $groupscore->user("user02_id")->first()->id }}" readonly />
                <input type="text" name="gamescore[gamescore02]" placeholder="プレイヤーBの点数"/>
            </div>
            <div class="title">
                <h2>プレイヤーC点数</h2>
                <input type="text" name="gamescore[user03_id]" value="{{ $groupscore->user("user03_id")->first()->id }}" readonly />
                <input type="text" name="gamescore[gamescore03]" placeholder="プレイヤーCの点数"/>
            </div>
            <div class="title">
                <h2>プレイヤーD点数</h2>
                <input type="text" name="gamescore[user04_id]" value="{{ $groupscore->user("user04_id")->first()->id }}" readonly />
                <input type="text" name="gamescore[gamescore04]" placeholder="プレイヤーDの点数"/>
            </div>
            <input type="submit" value="保存"/>
        </form>
        <div class="footer">
            <a href="/logs">戻る</a>
        </div>
    </body>
</html>