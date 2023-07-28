<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Client extends Model
{
    use HasFactory;
    protected $fillable=[
        "nom",
        "prenom",
        "numero"
    ];


    public function comptes()
    {
        return $this->HasMany(Compte::class);
    }
}
