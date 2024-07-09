<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movie;

class MovieController extends Controller
{
    public function allmovies(){
        $movies = Movie::all();
        return view('index', ['movies' => $movies]);
    }

    public function specificmovie($id){
        $movie = Movie::where('id',$id)->first();
        if($movie){
        return view('show', ['movie' => $movie]);
        }
        else{
            return redirect()->route('movies.all');
        }
    }

    public function movieaddform(){
        return view('create');
    }

    public function movieadd(Request $request){
        $movie = new Movie;
        $movie->movie_name = $request->movie_name;
        $movie->description = $request->description;
        $movie->genre = $request->genre;
        $movie->release_date = $request->release_date;
        $movie->save();
        return redirect()->route('movies.all');
    }

    public function movieupdateform($id){
        $movie = Movie::where('id',$id)->first();
        if($movie){
        return view('edit' , ['movie' => $movie]);
        }
        else{
            return redirect()->route('movies.all');
        }
    }

    public function movieupdate(Request $request,$id){
        $movie = Movie::where('id',$id)->first();
        $movie->movie_name = $request->movie_name;
        $movie->description = $request->description;
        $movie->genre = $request->genre;
        $movie->release_date = $request->release_date;
        $movie->save();
        return redirect()->route('movies.all');
    }
}
