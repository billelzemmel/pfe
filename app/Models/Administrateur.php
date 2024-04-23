<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Sanctum\HasApiTokens ;

class Administrateur extends Model
{
    use HasFactory  ,HasApiTokens;
    protected $fillable = [
        'nom',
        'prenom',
        'login',
        'password', 
        'email',
        'autoecole_id',
        'api_token'
    ];
    public function autoecole()
    {
        return $this->belongsTo(autoecole::class);
    }
}
