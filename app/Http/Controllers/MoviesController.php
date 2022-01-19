<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Movies;

class MoviesController extends Controller
{
    public function add_movies(){
        return view('add_movies_form');
    }

    public function save_movie(Request $request){
        if(empty($request->title)){
            return response()->json([
                'status' => 1,
                'msg' => 'No title.'
            ]);
        }
        $favourite = 0;
        if(!empty($request->favourite))
            $favourite = $request->favourite;

        $watched = 0;
        if(!empty($request->watched))
            $watched = $request->watched;

        $url = "";
        if(!empty($request->url))
            $url = $request->url;

        $moviesModel = new Movies();
        $movieId = $moviesModel->add_movie($request->title, $url, $favourite, $watched);
        
        if($movieId != 0){
            return response()->json([
                'status' => 0,
                'msg' => 'Success.',
                'movieId' => $movieId
            ]);
        }
        return response()->json([
            'status' => 2,
            'msg' => 'Fail to add.'
        ]);
    }
}