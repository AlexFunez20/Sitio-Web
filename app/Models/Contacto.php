<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Contacto extends Model
{
    protected $fillable = [
        'nombre',
        'correo',
        'telefono',
        'asunto',
        'mensaje',
        'leido',
    ];

    protected function casts(): array
    {
        return [
            'leido' => 'boolean',
        ];
    }
}
