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
        {{ $user->login }}
        {!! $content !!}
        <script src="/js/app.js"></script>
    </body>
</html>