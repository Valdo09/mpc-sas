<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Satisfaction extends Model
{
    use HasFactory;
    protected $fillable=[
        'id',
        'nom',
        'prenom',
        'email',
        'service',
        'disponibilite',
        'delais',
        'prix',
        'qualite',
        'proprete',
        'protection',
        'conseils',
        'recommandation',
        'note',
        'avis',
        'link',
        'statut',
        'publie'
    ];
}
