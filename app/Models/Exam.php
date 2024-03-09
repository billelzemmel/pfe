<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Exam extends Model
{
    use HasFactory;
    use HasFactory;
    
    protected $fillable = [
        'reference',
        'date',
        'condidat_id',
        'moniteur_id',
        'type_id'
    ];
   
    public function condidiat()
    {
        return $this->belongsTo(Candidats::class, 'condidat_id');
    }
    
    public function moniteur()
    {
        return $this->belongsTo(Moniteur::class, 'moniteur_id');
    }
    
    public function types()
    {
        return $this->belongsTo(Types::class, 'type_id');
    }
    
}
