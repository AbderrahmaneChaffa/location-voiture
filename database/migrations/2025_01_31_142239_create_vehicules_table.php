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
        Schema::create('vehicules', function (Blueprint $table) {
            $table->id();
            $table->string('marque');
            $table->string('modele');
            $table->integer('annee');
            $table->string('immatriculation')->unique();
            $table->string('vin')->unique();
            $table->integer('kilometrage')->default(0);
            $table->integer('nombre_places')->nullable();
            $table->enum('carburant', ['essence', 'diesel', 'electrique', 'hybride']);
            $table->enum('disponibilite', ['disponible', 'indisponible'])->default('disponible');
            $table->decimal('prix_journalier', 8, 2); // Prix de location par jour
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vehicules');
    }
};
