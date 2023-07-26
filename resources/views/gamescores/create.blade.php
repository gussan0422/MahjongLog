<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Blog</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        <h1>GameScore</h1>
        <div class='gamescores'>
            @foreach ($gamescores as $gamescore)
                <div class='gamescore'>
                    <p class='body'>{{ $gamescore->gamescore01 }}</p>
                    <p class='body'>{{ $gamescore->gamescore02 }}</p>
                    <p class='body'>{{ $gamescore->gamescore03 }}</p>
                    <p class='body'>{{ $gamescore->gamescore04 }}</p>
                </div>
            @endforeach
        </div>
        <div>
            <a href="/">戻る</a>
        </div>
        <div class='paginate'>
            {{ $gamescores->links() }}
        </div>
    </body>
</html>