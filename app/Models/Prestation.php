<?php

namespace App\Models;

use App\Models\Service;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Prestation extends Model
{
    use HasFactory;
    protected $fillable=[
        'id','nom','description','image','icone'
    ];

    public function services(){
        return $this->hasMany(Service::class);
    }
}
