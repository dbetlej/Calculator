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
                <p class="px-2"><a href="/dashboard"><img src="/img/taskARR.png"></a></p>
                <div>
                    <p class="px-2">Witaj, {{ $user->login }}</p>
                    <p class="px-2">CTRL + D - duplicate content.</p>
                    <p class="px-2 text-sm">tip for today</p>
                </div>
            </div>
            <div class="pt-5 pb-0 flex flex-nowrap justify-center">
                <div class="p-2">Marvel</div>
                <div class="p-2">DC Legends</div>
                <div class="p-2">Star wars</div>
            </div>
            <div class="flex flex-nowrap justify-center">
                <p class="px-2 text-sm">last</p>
                <p class="px-2 text-sm">clear</p>
            </div>

            <div class="p-5 text-right">
            <button class="bg-white hover:bg-gray-100 text-gray-800 font-semibold py-2 px-4 border border-gray-400 rounded shadow">
                <a href="/logout">Logout</a>
            </button>
            </div>
            <div class="flex flex-row justify-center">
                <div class="flex text-purple-700 dark:text-purple-700">FAVORITE</div>
            </div>
            <div class="flex flex-row justify-center text-center p-5">
                <div class="text-sm flex-col">
                    <div class=" text-purple-700 dark:text-purple-700">Title (how much films)</div>
                    <div>List</div>
                    <div>more...</div>
                </div>
            </div>
            <div class="flex flex-row justify-center">
                <div class="text-purple-700 dark:text-purple-700">ALL</div>
            </div>
        </div>
    
        <div class="flex flex-row justify-center pt-20">
            {!! $content !!}
            <script src="/js/app.js"></script>
        </div>
    </body>
</html>