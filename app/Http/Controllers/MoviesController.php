<?php

namespace App\Http\Controllers;

use App\Models\Movies;
use App\Models\Producers;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;


class MoviesController extends Controller
{
    public function index(Request $request)
    {
        $movies = Movies::all();

        $producers = Producers::all();

        $query = $request->input('query');

       
        $movies = Movies::when($query, function ($queryBuilder) use ($query) {
            return $queryBuilder->where('title', 'like', '%' . $query . '%')->orwhere('actor_actress', 'like', '%' . $query . '%')->orwhere('producer', 'like', '%' . $query . '%');
        })->get();

        return view('admin', compact('movies'), compact('producers'));
    }

    
    public function store(Request $request): RedirectResponse
    {
            
        $request->validate([
            'cover'          => 'required | string',
            'title'          => 'required | string',
            'producer_id'       => 'required|exists:producers,id',
            'actor_actress'  => 'required | string',
            'synopsis'       => 'required | string'
        ]);

        Movies::create([
            'cover'          => $request->cover,
            'title'          => $request->title,
            'producer_id'       => $request->producer_id,
            'actor_actress'  => $request->actor_actress,
            'synopsis'       => $request->synopsis
        ]);

        return redirect('admin');
    }
    
    public function update(Request $request, $id): RedirectResponse
    {
        $request->validate([
            'cover'          => 'required | string',
            'title'          => 'required | string',
            'producer_id'        => 'required|exists:producers,id',
            'actor_actress'  => 'required | string',
            'synopsis'       => 'required | string'
        ]);

       
        $movies = Movies::findOrFail($id);


          
            $movies->update([
            'cover'          => $request->cover,
            'title'          => $request->title,
            'producer_id'       => $request->producer_id,
            'actor_actress'  => $request->actor_actress,
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

    public function show($id)
{

    $producers = Producers::all();

    $producers = Producers::findOrFail($id);

    $movie = Movies::with('producers')->findOrFail($id);

    return view('show',compact('producers'));
}

}