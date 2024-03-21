<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Seances extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'start_date',
        'end_date',
        'condidat_id',
        'moniteur_id',
    ];
    public function condidiat()
    {
        return $this->belongsTo(Candidats::class, 'condidat_id');
    }
    
    public function moniteur()
    {
        return $this->belongsTo(Moniteur::class, 'moniteur_id');
    }
}
