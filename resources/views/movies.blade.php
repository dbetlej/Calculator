
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
