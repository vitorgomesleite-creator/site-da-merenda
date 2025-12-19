<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Semana extends Model
{
    protected $table = 'semanas';

    protected $fillable = [
        'nome_dia'
    ];

    public function cardapios()
    {
        return $this->hasMany(Cardapio::class);
    }
}
