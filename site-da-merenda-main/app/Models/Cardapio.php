<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cardapio extends Model
{
    protected $fillable = [
        'semana_id',
        'prato_id'
    ];

    public function semana()
    {
        return $this->belongsTo(Semana::class);
    }

    public function prato()
    {
        return $this->belongsTo(Prato::class);
    }
}
