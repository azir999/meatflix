<?php
 
namespace App\Http\Controllers;
use App\Models\Movies;
use Illuminate\Http\Request;
 
class HomeController extends Controller
{
    public function index()
    {
        $movies = Movies::all();

        return view('home', compact('movies'));
    }
}