<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}" />
        <link href="/css/app.css" rel="stylesheet">
        <title>taskarr.com - array IT.</title>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script> 
    </head>
    <body>
        <div class="flex flex-col mx-4 w-full h-full">
            @foreach($movies as $movie)
                <div class="my-2 w-full flex flex-col h-auto">
                    <a href="/movie/{{ $movie->id }}" class="my-2">{{ $movie->name }}</a>
                    @if(!empty($movie->url))
                        <a href="{{ $movie->url }}" class="my-2">link</a>
                    @endif
                </div>
            @endforeach
        </div>
    </body>
</html>