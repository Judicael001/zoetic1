<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class inscriptions extends Model
{
    //
    use HasFactory;

    protected $fillable =
    [
        'nom',
        'prenom',
        'email',
        'telephone',
        'formation',
        'statut'
    ];

    public function user()
    {
        return $this->belongsTo(\App\Models\User::class);
    }

    public function formation()
    {
        return $this->belongsTo(\App\Models\Formations::class);
    }
}
