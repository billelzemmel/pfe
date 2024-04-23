<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Laravel\Sanctum\HasApiTokens as SanctumHasApiTokens;


class Sadmin extends Authenticatable
{
    use HasFactory, SanctumHasApiTokens;   
     protected $fillable = ['nom', 'prenom', 'login', 'password', 'email', 'api_token'];


    
}
