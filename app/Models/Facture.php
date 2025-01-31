<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Facture extends Model
{
    use HasFactory;

    protected $fillable = [
        'location_id',
        'numero_facture',
        'date_facture',
        'montant',
        'methode_paiement',
        'date_paiement',
        'statut',
    ];

    // Relation avec la location
    public function location()
    {
        return $this->belongsTo(Location::class);
    }
}
