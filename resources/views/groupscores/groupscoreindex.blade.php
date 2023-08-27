<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>MahjongLog</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        <h1>GroupScore</h1>
        <div class='groupscores'>
            ここからgroupscores
            @foreach ($groupscores as $groupscore)
                <div class='groupscore'>
                    <p class='body'>{{ $groupscore->user01_id }} {{ $groupscore->sumgamescore01 }}</p>
                    <p class='body'>{{ $groupscore->user02_id }} {{ $groupscore->sumgamescore02 }}</p>
                    <p class='body'>{{ $groupscore->user03_id }} {{ $groupscore->sumgamescore03 }}</p>
                    <p class='body'>{{ $groupscore->user04_id }} {{ $groupscore->sumgamescore04 }}</p>
                </div>
            @endforeach
        </div>
        <h1>点数記入</h1>
        <form action="/logs" method="POST">
            @csrf
            <div class="title">
                <h2>プレイヤーA点数</h2>
                <input type="text" name="groupscore[user01_id]" placeholder="ユーザーID"/>
                <input type="text" name="groupscore[sumgamescore01]" placeholder="プレイヤーAの点数"/>
            </div>
            <div class="title">
                <h2>プレイヤーB点数</h2>
                <input type="text" name="groupscore[user02_id]" placeholder="ユーザーID"/>
                <input type="text" name="groupscore[sumgamescore02]" placeholder="プレイヤーBの点数"/>
            </div>
            <div class="title">
                <h2>プレイヤーC点数</h2>
                <input type="text" name="groupscore[user03_id]" placeholder="ユーザーID"/>
                <input type="text" name="groupscore[sumgamescore03]" placeholder="プレイヤーCの点数"/>
            </div>
            <div class="title">
                <h2>プレイヤーD点数</h2>
                <input type="text" name="groupscore[user04_id]" placeholder="ユーザーID"/>
                <input type="text" name="groupscore[sumgamescore04]" placeholder="プレイヤーDの点数"/>
            </div>
            <input type="submit" value="保存"/>
        </form>
        <div class="footer">
            <a href="/logs">戻る</a>
        </div>
    </body>
</html>