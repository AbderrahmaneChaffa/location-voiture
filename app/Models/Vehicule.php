<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vehicule extends Model
{
    use HasFactory;

    protected $fillable = [
        'marque',
        'modele',
        'annee',
        'immatriculation',
        'vin',
        'kilometrage',
        'nombre_places',
        'carburant',
        'disponibilite',
        'prix_journalier',
    ];

    // Relation avec les entretiens
    public function entretiens()
    {
        return $this->hasMany(Entretien::class);
    }

    // Relation avec les pannes
    public function pannes()
    {
        return $this->hasMany(Panne::class);
    }

    // Relation avec les locations
    public function locations()
    {
        return $this->hasMany(Location::class);
    }
}