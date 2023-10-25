<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('emprunts', function (Blueprint $table) {
            $table->id();
            $table->date('date_emprunt');
            $table->date('date_retour_prevue');
            $table->date('date_retour_effective');
            $table->unsignedBigInteger('id_livre');
            $table->foreign('id_livre')->references('id_livre')->on('livres')->onDelete('cascade');

            $table->unsignedBigInteger('id_etudiant');
            $table->foreign('id_etudiant')->references('id_etudiant')->on('etudiants')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('emprunts');
    }
};
