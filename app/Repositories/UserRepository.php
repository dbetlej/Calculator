<?php

namespace App\Repositories;

use Illuminate\Support\Facades\Hash;

use App\Models\Movies;
use App\Models\Users;

class UserRepository {

    private $model;

    public function __construct()
    {
        $this->model = new Users();
    }

    public function create(array $payload): bool
    {
        $tempPass = Hash::make($payload['password']);
        //todo:
        $user = $this->model->factory()->create([
            'login' => ucfirst($payload['login']),
            'email' => $payload['email'],
            'password' => $tempPass,
        ]);

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
