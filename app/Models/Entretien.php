<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Entretien extends Model
{
    use HasFactory;

    protected $fillable = [
        'vehicule_id',
        'date_entretien',
        'type_entretien',
        'cout',
        'description',
    ];

    // Relation avec le véhicule
    public function vehicule()
    {
        return $this->belongsTo(Vehicule::class);
    }
}
