<?php

namespace App\Http\Controllers;
use App\Models\Producers;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;


class ProducersController extends Controller
{
    public function index(Request $request)
    {

        $producers = Producers::all();

        $query = $request->input('query');
       
        $producers = Producers::when($query, function ($queryBuilder) use ($query) {
            return $queryBuilder->where('name', 'like', '%' . $query . '%');
        })->get();


        return view('producers', compact('producers'));
    }

    
    public function store(Request $request): RedirectResponse
    {
            
        $request->validate([
            'profil'     => 'required | string',
            'name'       => 'required | string',
            'birthdate'  => 'required | date'
        ]);

        Producers::create([
            'profil'     => $request->profil,
            'name'       => $request->name,
            'birthdate'  => $request->birthdate
        ]);

        return redirect('producers');
    }
    
    public function update(Request $request, $id): RedirectResponse
    {
        $request->validate([
          'profil'      => 'required | string',
          'name'       => 'required | string',
          'birthdate'  => 'required | date'
        ]);

       
        $producers = Producers::findOrFail($id);


          
            $producers->update([
            'profil'      => $request->profil,
            'name'       => $request->name,
            'birthdate'  => $request->birthdate
            ]);

            return redirect('producers');
    }
    

    public function destroy($id): RedirectResponse
    {

        $producers = Producers::findOrFail($id);

        $producers->delete();

        return redirect('producers');
    }
    

}
