<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Evento extends Model
{
    protected $fillable = [
        'categoria_id',
        'nombre',
        'slug',
        'descripcion',
        'fecha_inicio',
        'fecha_fin',
        'lugar',
        'direccion',
        'imagen',
        'estado',
        'destacado',
    ];

    protected function casts(): array
    {
        return [
            'fecha_inicio' => 'datetime',
            'fecha_fin' => 'datetime',
            'destacado' => 'boolean',
        ];
    }

    public function categoria(): BelongsTo
    {
        return $this->belongsTo(Categoria::class);
    }

    public function tiposBoleto(): HasMany
    {
        return $this->hasMany(TipoBoleto::class);
    }

    public function fotosGaleria(): HasMany
    {
        return $this->hasMany(GaleriaFotos::class);
    }
}
