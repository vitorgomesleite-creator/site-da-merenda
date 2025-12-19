<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Prato extends Model
{
    protected $fillable = [
        'nome',
        'descricao'
    ];

    public function cardapios()
    {
        return $this->hasMany(Cardapio::class);
    }
}
