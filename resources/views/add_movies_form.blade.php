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
        <a href="/logout">Logout</a>
        <button id="open_modal">Open form.</button>
        <form class="absolute top-1/2 left-1/2 add-movie-form py-2" action="/add_movies" id="add_movies" method="POST" style="display:none;" >
            @csrf
            <input type="text" name="title" placeholder="MOVIE NAME" >
            <input type="text" name="url" placeholder="URL TO VIDEO" >
            <input type="checkbox" name="favourite" id="favourite" >
            <label for="favourite" >
            Add to favs?
            </label>
            <input type="checkbox" name="watched" id="watched" >
            <label for="watched" >
            Did u did u watch me?
            </label>
            <input type="button" id="add_button" value="ADD MOVIE" >
        </form>

        </div>

        <script src="/js/app.js"></script>
    </body>
</html>