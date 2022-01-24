<div class="container mx-auto">
    <div class="float-right">
        <button class="bg-white hover:bg-gray-100 text-gray-800 font-semibold py-2 px-4 border border-gray-400 rounded shadow">
            <a href="/logout">Logout</a>
        </button>
    </div>
    <div class="pt-20 flex justify-center">
        <div class="mr-2 ml-2">
            <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 border border-blue-700 rounded">
                <a href="/movies">MOVIES</a>
            </button>
        </div>
        <div class="mr-2 ml-2">    
            <button class="bg-transparent hover:bg-blue-500 text-blue-700 font-semibold hover:text-white py-2 px-4 border border-blue-500 hover:border-transparent rounded" id="open_modal">ADD MOVIE</button>
        </div>
    </div>
</div>

<form class="absolute top-1/2 left-1/2 add-movie-form py-2" action="/add_movies" id="add_movies" method="POST" style="display:none;" >
            
    <div class="relative w-full mt-2">
        <span class="absolute right-0 top-0 close">x</span>
    </div>

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