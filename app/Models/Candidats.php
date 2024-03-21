<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Candidats extends Model
{
    use HasFactory;
    protected $fillable = ['role', 'user_id','moniteur_id']; 

    public function user()
{
    return $this->belongsTo(User::class);
}
public function moniteur()
{
    return $this->belongsTo(Moniteur::class);
}
}
