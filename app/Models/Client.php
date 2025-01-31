<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;

    protected $fillable = [
        'nom',
        'prenom',
        'email',
        'telephone',
        'numero_permis',
        'date_obtention_permis',
        'date_naissance',
        'adresse',
        'ville',
        'pays',
    ];

    // Relation avec les locations
    public function locations()
    {
        return $this->hasMany(Location::class);
    }
}