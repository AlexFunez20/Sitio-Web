<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class TipoBoleto extends Model
{
    protected $fillable = [
        'evento_id',
        'nombre',
        'descripcion',
        'precio',
        'cantidad_disponible',
        'activo',
    ];

    protected function casts(): array
    {
        return [
            'precio' => 'decimal:2',
            'cantidad_disponible' => 'integer',
            'activo' => 'boolean',
        ];
    }

    public function evento(): BelongsTo
    {
        return $this->belongsTo(Evento::class);
    }
}
