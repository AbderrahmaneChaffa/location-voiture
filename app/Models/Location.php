<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    use HasFactory;

    protected $fillable = [
        'client_id',
        'vehicule_id',
        'user_id',
        'date_debut',
        'date_fin',
        'kilometrage_depart',
        'kilometrage_retour',
        'etat_depart',
        'etat_retour',
        'prix_total',
        'statut',
    ];

    // Relation avec le client
    public function client()
    {
        return $this->belongsTo(Client::class);
    }

    // Relation avec le véhicule
    public function vehicule()
    {
        return $this->belongsTo(Vehicule::class);
    }

    // Relation avec l'utilisateur (qui a créé la location)
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // Relation avec les factures
    public function factures()
    {
        return $this->hasMany(Facture::class);
    }
    public function users()
{
    return $this->belongsToMany(User::class, 'location_user');
}
}
