<?php

namespace App\Http\Controllers\Proxy;

use App\Http\Controllers\Interfaces\MoviesInterface;
use App\Http\Controllers\MoviesController;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Models\Movies;

class MoviesProxy extends Controller implements MoviesInterface
{
    private $movies;
    
    public function __construct(MoviesController $movies)
    {
        $this->movies = $movies;
    }

    public function add_movies(): mixed
    {
        if(!Auth::check())
            return redirect('/login');

        return $this->movies->add_movies();
    }

    public function save_movie(Request $request): mixed
    {
        if(!Auth::check())
            return response()->json([
                'status' => 1,
                'msg' => 'No auth.'
            ]);

        if(empty($request->title)){
            return response()->json([
                'status' => 1,
                'msg' => 'No title.'
            ]);
        }

        return $this->movies->save_movie($request);
    }

    public function edit_movie(int $movieId, Request $request): mixed
    {
        if(!Auth::check())
            return response()->json([
                'status' => 1,
                'msg' => 'No auth.'
            ]);

        if(empty($request->title) || empty($movieId)){
            return response()->json([
                'status' => 1,
                'msg' => 'No data.'
            ]);
        }

        return $this->movies->edit_movie($movieId, $request);
    }

    public function delete_movie(int $movieId, Request $request): mixed
    {
        if(!Auth::check())
            return response()->json([
                'status' => 1,
                'msg' => 'No auth.'
            ]);

        return $this->movies->delete_movie($movieId, $request);
    }

    public function movies(): mixed
    {
        if(!Auth::check())
            return redirect('/login');

        return $this->movies->movies();
    }

    public function get_movie(int $movieId): mixed
    {
        if(!Auth::check())
            return redirect('/login');

        return $this->movies->get_movie($movieId);
    }

    public function list(): mixed
    {
        if(!Auth::check())
            return redirect('/login');

        return $this->movies->list();
    }

    public function get_list(int $listId): mixed
    {
        if(!Auth::check())
            return redirect('/login');

        return $this->movies->get_list($listId);
    }
}