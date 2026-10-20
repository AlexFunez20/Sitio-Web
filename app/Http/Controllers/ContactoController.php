<?php

namespace App\Http\Controllers;

use App\Models\Contacto;
use Illuminate\Http\Request;

class ContactoController extends Controller
{
    public function store(Request $request)
    {
        $data = $request->validate([
            'nombre' => ['required', 'string', 'max:255'],
            'correo' => ['required', 'email', 'max:255'],
            'telefono' => ['nullable', 'string', 'max:255'],
            'asunto' => ['nullable', 'string', 'max:255'],
            'mensaje' => ['required', 'string'],
        ]);

        Contacto::create($data);

        return back()->with('success', 'Gracias por contactarnos. En breve te responderemos.');
    }
}
