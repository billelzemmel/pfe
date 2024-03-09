<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class autoecole extends Model
{
    use HasFactory;
    protected $fillable = [
        'nom',
        'adresse',
        'description', 
        
      
    ];
}
