<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vehicule extends Model
{
    use HasFactory;
    protected $fillable = ['matricule', 'nom', 'image', 'moniteur_id','disponible','type'];
    public function moniteur()
    {
        return $this->belongsTo(Moniteur::class);
    }
}
