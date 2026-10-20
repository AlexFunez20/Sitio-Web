<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ComoParticipar extends Model
{
    protected $table = 'como_participars';

    protected $fillable = [
        'titulo',
        'descripcion',
        'orden',
        'activo',
    ];

    protected function casts(): array
    {
        return [
            'orden' => 'integer',
            'activo' => 'boolean',
        ];
    }
}
