<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Emprunts extends Model
{
    use HasFactory;

    protected $fillable = [
        "id",
        "date_emprunt",
        "date_retour_prevue",
        "date_retour_effective",
        "id_livre",
        "id_etudiant"
    ];

    // protected $primaryKey = 'id_emprunt';

    // on a ces deux fonctions (logement() et voyageur()) parcequ'ils sont des clés étrangère dans la table sejours
    public function etudiant(){
        return $this->belongsTo(Etudiant::class, 'id_etudiant');
    }

    public function livre(){
        return $this->belongsTo(Livre::class, 'id_livre');
    }
}
