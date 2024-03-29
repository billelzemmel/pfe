<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Moniteur extends Model
{
    use HasFactory;
    protected $fillable = ['role', 'user_id']; 
    public function user()
{
    return $this->belongsTo(User::class);
}

}
