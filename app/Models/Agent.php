<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Agent extends Model
{
    use HasFactory;

    protected $fillable = ['personne_id', 'date_embauche'];

    public function personne()
    {
        return $this->belongsTo(Personne::class);
    }

    public function user()
    {
        return $this->hasOne(User::class);
    }
}
