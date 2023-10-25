<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Etudiant extends Model
{
    use HasFactory;

    protected $fillable = [
        "id_etudiant",
        "nom",
        "prenom",
        "adresse",
        "email",
        "telephone",
        "classe"
    ];

    protected $primaryKey = 'id_etudiant';

    public function emprunts(){
        return $this->hasMany(Emprunts::class);
    }
}
