<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Dudes;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    /** 
     *  Handle Login
     * 
     * @return \Illuminate\View\View
     */
    
    public function show(){
        if(Auth::check())
            return redirect('/dashboard');
        return view('login');
    }
    public function logout(Request $request){
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/login');
    }
    public function register(){
        return view('register');
    }
    public function dashboard(){
        if(!Auth::check())
            return redirect('/login');
        
        $data['user'] = Auth::user();
        return $this->load('dashboard', $data);
    }
    
    public function create_user(Request $request){

        if(empty($request->email) || empty($request->login) || empty($request->password) || empty($request->rpassword))
            return false;

        if($request->password != $request->rpassword)
            return false;
        
        $dudesModel = new Dudes();
        $res = $dudesModel->chk_email($request->email);
        if(!empty($res->id))
            return false;

        $tempPass = Hash::make($request->password);
        $user_id = $dudesModel->create_user($request->login, $request->email, $tempPass, 0); // string $login, string $email, string $password, int $VIP
        if(!is_numeric($user_id))
            return false;

        return $user_id;
    }
      public function login(Request $request){

        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->intended('dashboard');
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ]);
    }
}