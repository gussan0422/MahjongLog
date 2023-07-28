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
        <div class="footer">
            <a href="/logs">戻る</a>
        </div>
    </body>
</html>