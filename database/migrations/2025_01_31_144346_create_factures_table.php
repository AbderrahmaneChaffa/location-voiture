<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
{
    Schema::create('factures', function (Blueprint $table) {
        $table->id();
        $table->foreignId('location_id')->constrained()->onDelete('cascade');
        $table->string('numero_facture')->unique();
        $table->date('date_facture');
        $table->decimal('montant', 8, 2);
        $table->enum('methode_paiement', ['carte', 'espece', 'virement'])->default('espece');
        $table->date('date_paiement')->nullable();
        $table->enum('statut', ['payee', 'impayee'])->default('impayee');
        $table->timestamps();
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('factures');
    }
};
