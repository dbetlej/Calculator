<div class="container mx-auto">
    <div class="pt-20 flex justify-center">
        <div class="mr-2 ml-2">
            <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 border border-blue-700 rounded">
                <a href="/movies">MOVIES</a>
            </button>
        </div>
        <div class="mr-2 ml-2">    
            <button class="bg-transparent hover:bg-blue-500 text-blue-700 font-semibold hover:text-white py-2 px-4 border border-blue-500 hover:border-transparent rounded" id="add_movies_modal">ADD MOVIE</button>
        </div>
    </div>
</div>

<div class="text-center">
    <form class="absolute top-1/2 left-1/2 add-movie-form p-8" action="/add_movies" id="add_movies" method="POST" style="display:none;" >
            
    <div class="relative w-full mt-2">
        <span class="absolute right-0 top-0 close">x</span>
    </div>

    @csrf
    <input class="py-2 px-20 m-2 text-center" type="text" name="title" placeholder="MOVIE NAME" ></br>
    <input class="py-2 px-20 m-2 text-center" type="text" name="url" placeholder="URL TO VIDEO" ></br>
    <div class="py-2">
        <input type="checkbox" name="favourite" id="favourite" >
        <label for="favourite" >
        Add to favs?
        </label></br>
        <input type="checkbox" name="watched" id="watched" >
        <label for="watched" >
        Did u did u watch me?
        </label></br>
    </div>
    <input class="bg-transparent hover:bg-green-500 text-green-700 font-semibold hover:text-white py-2 px-4 m-2 border border-green-500 hover:border-transparent rounded" type="button" id="add_button" value="ADD MOVIE" >
    </form>
</div>

<div class="absolute bottom-2 right-1 p-5" id="info_popup" style="display:none;" >    
    Save successfully.
</div>