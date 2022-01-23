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
        <div class="container max-w-full pt-40">
            <div class="flex flex-row justify-center">
                <p class="px-2"><a href="/logo">Logo</a></p>
                <p class="px-2">Witaj, {{ $user->login }}</p>
            </div>
        </div>
            <div class="flex flex-row justify-center pt-20">
                {!! $content !!}
                <script src="/js/app.js"></script>
            </div>
    </body>
</html>