<?php

namespace Database\Seeders;

use App\Models\Categoria;
use App\Models\ComoParticipar;
use App\Models\Evento;
use App\Models\GaleriaFotos;
use App\Models\TipoBoleto;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $categorias = [
            ['nombre' => 'Conciertos', 'slug' => 'conciertos', 'descripcion' => 'Noches de música en vivo.', 'activa' => true],
            ['nombre' => 'Festivales', 'slug' => 'festivales', 'descripcion' => 'Experiencias culturales y grandes multitudes.', 'activa' => true],
            ['nombre' => 'Familia', 'slug' => 'familia', 'descripcion' => 'Eventos para todas las edades.', 'activa' => true],
        ];

        foreach ($categorias as $categoria) {
            Categoria::firstOrCreate(['slug' => $categoria['slug']], $categoria);
        }

        $categoriasMap = Categoria::query()->pluck('id', 'slug');

        $eventos = [
            [
                'categoria_id' => $categoriasMap['conciertos'] ?? null,
                'nombre' => 'Noche Garífuna Fest',
                'slug' => 'noche-garifuna-fest',
                'descripcion' => 'Música, danza y tradición garífuna bajo el cielo de San Pedro Sula.',
                'fecha_inicio' => now()->addDays(8)->setTime(19, 0),
                'fecha_fin' => now()->addDays(8)->setTime(23, 30),
                'lugar' => 'San Pedro Sula',
                'direccion' => 'Boulevard Central 45',
                'imagen' => 'https://images.unsplash.com/photo-1501386761578-eac5c94b800a?auto=format&fit=crop&w=900&q=80',
                'estado' => 'publicado',
                'destacado' => true,
            ],
            [
                'categoria_id' => $categoriasMap['festivales'] ?? null,
                'nombre' => 'Rock Bajo las Estrellas',
                'slug' => 'rock-bajo-las-estrellas',
                'descripcion' => 'Una noche intensa con bandas locales e internacionales.',
                'fecha_inicio' => now()->addDays(15)->setTime(20, 30),
                'fecha_fin' => now()->addDays(15)->setTime(23, 59),
                'lugar' => 'Tegucigalpa',
                'direccion' => 'Parque Central',
                'imagen' => 'https://images.unsplash.com/photo-1492684223066-81342ee5ff30?auto=format&fit=crop&w=900&q=80',
                'estado' => 'publicado',
                'destacado' => true,
            ],
            [
                'categoria_id' => $categoriasMap['familia'] ?? null,
                'nombre' => 'Navidad en Concierto',
                'slug' => 'navidad-en-concierto',
                'descripcion' => 'Un espectáculo musical para compartir con la familia.',
                'fecha_inicio' => now()->addDays(20)->setTime(18, 30),
                'fecha_fin' => now()->addDays(20)->setTime(22, 0),
                'lugar' => 'La Ceiba',
                'direccion' => 'Malecón de La Ceiba',
                'imagen' => 'https://images.unsplash.com/photo-1516280440614-37939bbacd81?auto=format&fit=crop&w=900&q=80',
                'estado' => 'publicado',
                'destacado' => false,
            ],
        ];

        foreach ($eventos as $evento) {
            $event = Evento::firstOrCreate(['slug' => $evento['slug']], $evento);

            foreach ([
                ['evento_id' => $event->id, 'nombre' => 'General', 'descripcion' => 'Acceso general al evento.', 'precio' => 250.00, 'cantidad_disponible' => 200, 'activo' => true],
                ['evento_id' => $event->id, 'nombre' => 'Preferencial', 'descripcion' => 'Mejor ubicación.', 'precio' => 450.00, 'cantidad_disponible' => 80, 'activo' => true],
                ['evento_id' => $event->id, 'nombre' => 'VIP', 'descripcion' => 'Acceso premium con atención especial.', 'precio' => 900.00, 'cantidad_disponible' => 25, 'activo' => true],
            ] as $tipo) {
                TipoBoleto::firstOrCreate([
                    'evento_id' => $tipo['evento_id'],
                    'nombre' => $tipo['nombre'],
                ], $tipo);
            }
        }

        foreach ([
            ['titulo' => 'Consulta los eventos', 'descripcion' => 'Revisa fechas, lugares y precios.', 'orden' => 1, 'activo' => true],
            ['titulo' => 'Elige tu boleto', 'descripcion' => 'General, Preferencial o VIP.', 'orden' => 2, 'activo' => true],
            ['titulo' => 'Contáctanos', 'descripcion' => 'Escríbenos para reservar tu lugar.', 'orden' => 3, 'activo' => true],
            ['titulo' => 'Disfruta', 'descripcion' => 'Llega y vive la experiencia.', 'orden' => 4, 'activo' => true],
        ] as $paso) {
            ComoParticipar::firstOrCreate(['titulo' => $paso['titulo']], $paso);
        }

        foreach ([
            ['evento_id' => Evento::query()->first()?->id, 'titulo' => 'Concierto nocturno', 'descripcion' => 'Escena principal del evento.', 'imagen' => 'https://images.unsplash.com/photo-1501612780327-45045538702b?auto=format&fit=crop&w=900&q=80', 'orden' => 1, 'publicada' => true],
            ['evento_id' => Evento::query()->skip(1)->first()?->id, 'titulo' => 'Festival en vivo', 'descripcion' => 'Público disfrutando del show.', 'imagen' => 'https://images.unsplash.com/photo-1507874457470-272b3c8d8ee2?auto=format&fit=crop&w=900&q=80', 'orden' => 2, 'publicada' => true],
            ['evento_id' => Evento::query()->skip(2)->first()?->id, 'titulo' => 'Momentos familiares', 'descripcion' => 'Celebración para todas las edades.', 'imagen' => 'https://images.unsplash.com/photo-1511578314322-379afb476865?auto=format&fit=crop&w=900&q=80', 'orden' => 3, 'publicada' => true],
        ] as $foto) {
            if ($foto['evento_id']) {
                GaleriaFotos::firstOrCreate(['titulo' => $foto['titulo']], $foto);
            }
        }

    }
}
