<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Panne extends Model
{
    use HasFactory;

    protected $fillable = [
        'vehicule_id',
        'date_panne',
        'description',
        'statut',
    ];

    // Relation avec le véhicule
    public function vehicule()
    {
        return $this->belongsTo(Vehicule::class);
    }
}