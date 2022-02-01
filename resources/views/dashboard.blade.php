<div class="container mx-auto">
    <div class="pt-20 flex justify-center">
        <div class="mr-2 ml-2">
            <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 border border-blue-700 rounded">
                <a href="/movies">MOVIES</a>
            </button>
        </div>
        <div class="mr-2 ml-2">    
            <button class="bg-transparent hover:bg-blue-500 text-blue-700 font-semibold hover:text-white py-2 px-4 border border-blue-500 hover:border-transparent rounded" id="open_modal">ADD MOVIE</button>
        </div>
        <div class="mr-2 ml-2">    
            <button class="bg-transparent hover:bg-blue-500 text-blue-700 font-semibold hover:text-white py-2 px-4 border border-blue-500 hover:border-transparent rounded" id="open_modal_list">ADD LIST</button>
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

<form class="absolute top-1/2 left-1/2 py-2" action="/add_list" id="add_list" method="POST" style="display:none;" >
            
    <div class="flex flex-col relative w-full mt-2">
        <span class="absolute right-0 top-0 close">x</span>
    </div>

    @csrf
    <input type="text" name="title" placeholder="List title" >
    <input type="text" name="1movie" placeholder="#1 movie" >
    <input type="text" name="2movie" placeholder="#2 movie" >
    <input type="text" name="3movie" placeholder="#3 movie" >
    <input type="text" name="4movie" placeholder="#4 movie" >
    <input type="text" name="5movie" placeholder="#5 movie" >
    <input type="checkbox" name="favourite" id="favourite" >
    <label for="favourite" >
    Add to favs?
    </label>
    <label for="favboard" >
    Add to board?
    </label>
    <input type="checkbox" name="watched" id="watched" >
    <label for="watched" >
    Did u did u watch me?
    </label>
    <input type="button" id="add_button" value="ADD MOVIE" >
</form>

<div class="absolute bottom-2 right-1 p-5" id="info_popup" style="display:none;" >    
    Save successfully.
</div>