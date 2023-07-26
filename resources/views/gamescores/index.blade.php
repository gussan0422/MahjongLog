<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>MahjongLog</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        <h1>GameScore</h1>
        <div class='gamescores'>
            @foreach ($gamescores as $gamescore)
                <h2 class='title'>
                    <a href="/logs/{{ $gamescore->id }}">
                        {{ $gamescore->gamescore01 }}
                    </a>
                </h2>
                <div class='gamescore'>
                    <p class='body'>{{ $gamescore->gamescore01 }}</p>
                    <p class='body'>{{ $gamescore->gamescore02 }}</p>
                    <p class='body'>{{ $gamescore->gamescore03 }}</p>
                    <p class='body'>{{ $gamescore->gamescore04 }}</p>
                </div>
            @endforeach
            ここからgroupscores
            @foreach ($groupscores as $groupscore)
                <div class='groupscore'>
                    <p class='body'>{{ $groupscore->sumgamescore01 }}</p>
                    <p class='body'>{{ $groupscore->sumgamescore02 }}</p>
                    <p class='body'>{{ $groupscore->sumgamescore03 }}</p>
                    <p class='body'>{{ $groupscore->sumgamescore04 }}</p>
                </div>
            @endforeach
        </div>
        <div class='paginate'>
            {{ $gamescores->links() }}
        </div>
    </body>
</html>