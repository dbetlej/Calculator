<?php

namespace App\Repositories;

use App\Models\Movies;

class MoviesRepository {

    private $model;

    public function __construct()
    {
        $this->model = new Movies();
    }

    public function create(array $payload): bool
    {
        Movies::factory()->create($payload);

        return true;
    }

    public function update(int $movieId, array $payload): bool
    {
        DB::table('movies')
            ->where('id', $movieId)
            ->update($payload);

        return true;
    }

    public function delete(int $movieId): bool
    {
        $movie = Movies::find($movieId);
        $movie->delete();

        return true;
    }
}