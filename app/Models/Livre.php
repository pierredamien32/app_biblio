<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Livre extends Model
{
    use HasFactory;

    protected $fillable = [
        "id_livre",
        "titre",
        "auteur",
        "resume",
        "disponibilite",
        "localisation"
    ];

    protected $primaryKey = 'id_livre';

    public function emprunts(){
        return $this->hasMany(Emprunts::class);
    }
}
