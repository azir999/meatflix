<?php

namespace App\Http\Controllers;
use App\Models\Movies;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\View\View;

class MoviesController extends Controller
{
    public function index()
    {
        $movies = Movies::all();

        return view('admin', compact('movies'));

        return view('home', compact('movies'));
    }
    

}
