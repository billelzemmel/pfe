<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Administrateur extends Model
{
    use HasFactory;
    protected $fillable = [
        'nom',
        'prenom',
        'login',
        'password', 
        'email',
        'autoecole_id'
    ];
    public function autoecole()
    {
        return $this->belongsTo(autoecole::class);
    }
}
