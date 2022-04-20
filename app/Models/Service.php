<?php

namespace App\Models;

use App\Models\Commande;
use App\Models\Prestation;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Service extends Model
{
    use HasFactory;

    protected $guarded = [];

    public static function boot(){
        parent::boot();

        self::deleting(function($service){
            Storage::delete('public/'.$service->picture);
        });
    }

    public function prestation(){
        return $this->belongsTo(Prestation::class);
    }

    public function commandes(){
        return $this->hasMany(Commande::class);
    }
}
