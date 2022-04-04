<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Movies;

class MoviesController extends Controller
{
    public function index()
    {
        $movies = Movies::all();
        return $movies;
    }

    public function store(Request $request)
    {
        $movie = new Movies();
        $movie->url = $request->url;
        $movie->description = $request->description;
        $movie->series = $request->series;
        $movie->category = $request->category;
        $movie->favorite = $request->favorite;
        $movie->watched = $request->watched;
        $movie->to_watch = $request->to_watch;

        $movie->save();
    }

    public function show($id)
    {
        $movie = Movies::find($id);
        return $movie;
    }

    public function update(Request $request, $id)
    {
        $movie = Movies::findOrFail($request->$id);
        $movie->url = $request->url;
        $movie->description = $request->description;
        $movie->series = $request->series;
        $movie->category = $request->category;
        $movie->favorite = $request->favorite;
        $movie->watched = $request->watched;
        $movie->to_watch = $request->to_watch;

        $movie->save();
        return $movie;
    }

    public function destroy($id)
    {
        $movie = Movies::destroy($id);
        return $movie;
    }
}
