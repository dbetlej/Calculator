<?php

namespace App\Http\Controllers\Interfaces;

use Illuminate\Http\Request;

interface MoviesInterface
{
    public function add_movies(): mixed;

    public function save_movie(Request $request): mixed;

    public function edit_movie(int $movieId, Request $request): mixed;

    public function delete_movie(int $movieId, Request $request): mixed;

    public function movies(): mixed;

    public function get_movie(int $movieId): mixed;

    public function list(): mixed;

    public function get_list(int $listId): mixed;
}