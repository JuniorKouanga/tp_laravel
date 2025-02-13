<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Personne extends Model
{
    use HasFactory;

    protected $fillable = ['nom', 'prenom', 'sexe', 'date_naissance'];

    public function agents()
    {
        return $this->hasMany(Agent::class);
    }
}
