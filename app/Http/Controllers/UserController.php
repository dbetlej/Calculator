<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\CreateUserRequest;
use App\Http\Requests\LoginUserRequest;
use App\Repositories\UserRepository;
use Illuminate\Support\Facades\Auth;

use App\Models\Dudes;

class UserController extends Controller
{
    public $repository;

    public function __construct(UserRepository $repository)
    {
        $this->repository = $repository;
    }

    public function show()
    {
        return view('login');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/login');
    }

    public function register()
    {
        return view('register');
    }

    public function dashboard()
    {
        $data['user'] = Auth::user();

        return $this->load('dashboard', $data);
    }

    public function create_user(CreateUserRequest $request)
    {
        $data = $request->validated();

        $this->repository->create($data);

        return redirect('/login');
    }

    public function login(LoginUserRequest $request)
    {
        $data = $request->validated();

        if (Auth::attempt($data)) {
            $request->session()->regenerate();

            return redirect()->intended('dashboard');
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ]);
    }
}
