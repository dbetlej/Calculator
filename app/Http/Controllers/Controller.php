<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Auth;

class Controller extends BaseController{
    
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function load(string $content, array $data){
        if(!Auth::check()){
            return redirect('/');
        }
        $data['user'] = Auth::user();
        $data['content'] = view($content, $data);
        return view('layout', $data);
    }
}