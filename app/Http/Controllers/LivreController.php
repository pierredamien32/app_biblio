<?php

namespace App\Http\Controllers;

use App\Models\Livre;
use Illuminate\Http\Request;

class LivreController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->search;

        if ($search) {
            $livres = Livre::query()
                ->where('titre', 'LIKE', '%'.$search.'%')
                ->orWhere('auteur', 'LIKE', '%'.$search.'%')
                ->get();
        } else {
            $livres = Livre::latest()->get();
        }
        return view('livres.index', ['livres'=> $livres]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('livres.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request->all());
        

        Livre::create([
            'titre'=> $request->titre,
            'auteur'=> $request->auteur,
            'resume'=> $request->resume,
            'disponibilite'=> $request->disponibilite,
            'localisation'=> $request->localisation
        ]);

        return redirect('/')->with('Livre enregistrer avec succès.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $livre = livre::FindOrFail($id);
        return view('livres.edit',['livre'=> $livre]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $livre = Livre::FindOrFail($id);


        $livre->titre = $request->titre;
        $livre->auteur = $request->auteur;
        $livre->resume = $request->resume;
        $livre->disponibilite = $request->disponibilite;
        $livre->localisation = $request->localisation;
        // dd($request->disponibilite);
        $livre->update();
        return redirect('/')->with('Livre modifier avec succès.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $livres = Livre::FindOrFail($id);
        $livres->delete();
        return redirect('/');
    }
}
