<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}" />
        <link href="/css/app.css" rel="stylesheet">
        <title>taskarr.com - Sign In</title>
    </head>
    <body class="bg-black">
        <div class="container-form text-white">
            <div class="py-16 text-center"><h1 class="text-3xl">taskARR logo</h1><span>Simple task organizer</span></div>
        </div>
        <div class="form text-center text-gray-300">
            <form action="/login" method="POST" class="login-form">
                @csrf
                <input type="email" name="email" placeholder="E-MAIL@EXAMPLE.COM" >
                <input type="password" name="password" placeholder="PASSWORD" >
                <button>login</button>
            </form>
            <p class="message">Not registered? <a href="/register">Create an account</a></p>
        </div>
    </body>
</html>
