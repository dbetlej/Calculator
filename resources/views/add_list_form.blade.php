<button id="open_modal">Open form.</button>
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