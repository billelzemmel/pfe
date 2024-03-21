<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Sanctum\HasApiTokens as SanctumHasApiTokens;

class Administrateur extends Model
{
    use HasFactory , SanctumHasApiTokens;
    protected $fillable = [
        'nom',
        'prenom',
        'login',
        'password', 
        'email',
        'autoecole_id',
        'token'
    ];
    public function autoecole()
    {
        return $this->belongsTo(autoecole::class);
    }
}
