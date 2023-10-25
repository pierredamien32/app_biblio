<?php

namespace App\Http\Controllers;

use App\Models\Emprunts;
use App\Models\Etudiant;
use App\Models\Livre;
use Illuminate\Http\Request;

class EmpruntController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->search;

        if ($search) {
            $emprunts = Emprunts::query()
                ->where('date_emprunt', 'LIKE', '%'.$search.'%')
                ->orWhere('date_retour_prevue', 'LIKE', '%'.$search.'%')
                ->orWhere('date_retour_effective', 'LIKE', '%'.$search.'%')
                ->paginate(5);
        } else {
            $emprunts = Emprunts::latest()->paginate(5);
        }
        return view('emprunts.index', ['emprunts'=> $emprunts]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        return view('emprunts.create',[
            'etudiants' => Etudiant::all(),
            'livres' => Livre::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Emprunts::create([
            'date_emprunt'=> $request->date_emprunt,
            'date_retour_prevue'=> $request->date_retour_prevue,
            'date_retour_effective'=> $request->date_retour_effective,
            'id_etudiant'=> $request->id_etudiant,
            'id_livre'=> $request->id_livre,
        ]);

        return redirect('/emprunts')->with('Séjour enregistrer avec succès.');
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
        $emprunt = Emprunts::FindOrFail($id);
        return view('emprunts.edit',[
            'etudiants' => Etudiant::all(),
            'livres' => Livre::all(),
            'emprunt' => $emprunt
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $emprunt = Emprunts::FindOrFail($id);

        $emprunt->date_emprunt = $request->date_emprunt;
        $emprunt->date_retour_prevue = $request->date_retour_prevue;
        $emprunt->date_retour_effective = $request->date_retour_effective;
        $emprunt->id_etudiant = $request->id_etudiant;
        $emprunt->id_livre = $request->id_livre;

        $emprunt->update();
        return redirect('/emprunts')->with('Séjour modifier avec succès.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $emprunt = Emprunts::FindOrFail($id);
        $emprunt->delete();
        return redirect('/');
    }
}
