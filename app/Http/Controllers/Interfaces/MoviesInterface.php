<?php

namespace App\Http\Controllers\Interfaces;

use Illuminate\Http\Request;

interface MoviesInterface
{
    public function add_movies();

    public function save_movie(Request $request);

    public function edit_movie(int $movieId, Request $request);

    public function delete_movie(int $movieId, Request $request);

    public function movies();

    public function get_movie(int $movieId);

    public function list();

    public function get_list(int $listId);
}