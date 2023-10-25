<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Emprunts;
use App\Models\Etudiant;
use App\Models\Livre;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        Livre::create([
            'titre' => 'La belle au bois dormant',
            'auteur' => 'Mr Top',
            'resume' => 'Cool',
            'disponibilite' => 'disponible',
            'localisation' => 'Ranger A2',
        ]);

        Livre::create([
            'titre' => 'Roméo et juliette',
            'auteur' => 'Top Design',
            'resume' => 'Trop bien',
            'disponibilite' => 'emprunté',
            'localisation' => 'Ranger J2',
        ]);

        Etudiant::create([
            'nom' => 'DEO',
            'prenom' => 'John',
            'adresse' => 'Ville 3025',
            'email' => 'johndeo@gmail.com',
            'telephone' => '25148765',
            'classe' => 'L1',
        ]);

        Etudiant::create([
            'nom' => 'DOSSOU',
            'prenom' => 'Jean',
            'adresse' => 'Ville 4025',
            'email' => 'jeandossou@gmail.com',
            'telephone' => '58471236',
            'classe' => 'L2',
        ]);

        Emprunts::create([
            'date_emprunt' => '2023-01-12',
            'date_retour_prevue' => '2023-01-20',
            'date_retour_effective' => '2023-01-24',
            'id_livre' => 1,
            'id_etudiant' => 2,
        ]);

        Emprunts::create([
            'date_emprunt' => '2023-04-12',
            'date_retour_prevue' => '2023-04-21',
            'date_retour_effective' => '2023-04-19',
            'id_livre' => 2,
            'id_etudiant' => 1,
        ]);
    }
}
