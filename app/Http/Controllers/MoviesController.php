<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Interfaces\MoviesInterface;
use App\Http\Controllers\Request\MovieRequest;
use App\Repositories\MoviesRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Models\Movies;

class MoviesController extends Controller
{
    private $repository;

    public function __construct(MoviesRepository $repository)
    {
        $this->repository = $repository;
    }

    public function getMoviesForm()
    {
        return $this->load('add_movie_form', []);
    }

    public function postMovie(MovieRequest $request)
    {
        $data = $request->validated();
        
        $this->repository->create($data);

        return response()->json([
            'status' => 0,
            'msg' => 'Success.'
        ], 201);
    }

    public function putMovie(int $movieId, MovieRequest $request)
    {
        $data = $request->validated();

        $this->repository->update($movieId, $data);

        return response()->json([
            'status' => 0,
            'msg' => 'Success.'
        ]);
    }

    public function deleteMovie(int $movieId)
    {
        $this->repository->delete($movieId);

        return response()->json([
            'status' => 0,
            'msg' => 'Success.'
        ]);
    }

    public function movies()
    {
        $data['movies'] = Movies::get();
        return $this->load('movies', $data);
    }

    public function get_movie(int $movieId)
    {
        $data['movie'] = Movies::find($movieId);
        return $this->load('edit_movie_form', $data);
    }

    public function list()
    {
        $listModel = new Movies();
        $data['lists'] = $listsModel->get_all();
        return $this->load('lists', $data);
    }

    public function get_list(int $listId)
    {
        $listModel = new Movies();
        $data['list'] = $moviesModel->get($listId);
        return $this->load('edit_list_form', $data);
    }
}