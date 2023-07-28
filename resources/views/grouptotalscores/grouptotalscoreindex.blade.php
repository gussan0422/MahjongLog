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
        <div class='grouptotalscores'>
            <h1>グループ名</h1>
            @foreach ($grouptotalscores as $grouptotalscore)
                <h2 class='title'>
                    <a class='grouptotalscore'>
                        <a href="/logs/{{ $grouptotalscore->id }}">
                            {{ $grouptotalscore->groupname }}
                        </a>
                    </a>
                <h2></h2>
            @endforeach
        </div>
        <div class='paginate'>
            {{ $grouptotalscores->links() }}
        </div>
    </body>
</html>