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
            return back()->withErrors([
                'email' => 'The provided credentials do not match our records.',
            ]);

        if($request->password != $request->rpassword)
            return back()->withErrors([
                'password' => 'The provided credentials do not match our records.', // CHANGE IT.
            ]);

        $dude = Dudes::where('email', $request->email)->first();
        if(!empty($dude->id))
            return back()->withErrors([
                'email' => 'The provided credentials do not match our records.',
            ]);

        $tempPass = Hash::make($request->password);

<<<<<<< HEAD
        $dude = Dudes::create([
            'login' => ucfirst($request->login),
=======
        $dude = Dudes::factory()->create([
            'login' => $request->login,
>>>>>>> e246f5aa42c74281735c61c7e3a3737b0bd15eac
            'email' => $request->email,
            'password' => $tempPass,        
        ]);

        if(!is_numeric($dude->id))
            return back()->withErrors([
                'email' => 'The provided credentials do not match our records.'
            ]);

        return redirect('/login');
    }
      public function login(Request $request){

        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required']
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->intended('dashboard');
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.'
        ]);
    }
}