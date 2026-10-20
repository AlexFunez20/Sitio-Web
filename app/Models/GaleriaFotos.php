<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class GaleriaFotos extends Model
{
    protected $fillable = [
        'evento_id',
        'titulo',
        'descripcion',
        'imagen',
        'orden',
        'publicada',
    ];

    protected function casts(): array
    {
        return [
            'orden' => 'integer',
            'publicada' => 'boolean',
        ];
    }

    public function evento(): BelongsTo
    {
        return $this->belongsTo(Evento::class);
    }
}
