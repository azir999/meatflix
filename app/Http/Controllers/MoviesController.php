<?php

namespace App\Http\Controllers;

use App\Models\Movies;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;


class MoviesController extends Controller
{
    public function index(Request $request)
    {
        $movies = Movies::all();

        $query = $request->input('query');

       
        $movies = Movies::when($query, function ($queryBuilder) use ($query) {
            return $queryBuilder->where('title', 'like', '%' . $query . '%')->orwhere('actor_actress', 'like', '%' . $query . '%');
        })->get();

        return view('admin', compact('movies'));
    }


    public function create(): View
    {
        return view('admin');
    }
 
    
    public function store(Request $request): RedirectResponse
    {
            
        $request->validate([
            'cover'          => 'required | string',
            'title'          => 'required | string',
            'actor_actress' => 'required | string',
            'synopsis'       => 'required | string'
        ]);

        Movies::create([
            'cover'          => $request->cover,
            'title'          => $request->title,
            'actor_actress' => $request->actor_actress,
            'synopsis'       => $request->synopsis
        ]);

        return redirect('admin');
    }
    

    public function destroy($id): RedirectResponse
    {

        $movies = Movies::findOrFail($id);

        $movies->delete();

        return redirect('admin');
    }
}