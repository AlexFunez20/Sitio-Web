<?php

namespace App\Filament\Widgets;

use App\Models\Categoria;
use App\Models\ComoParticipar;
use App\Models\Contacto;
use App\Models\Evento;
use App\Models\GaleriaFotos;
use App\Models\TipoBoleto;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class EventiaOverview extends BaseWidget
{
    protected function getStats(): array
    {
        return [
            Stat::make('Eventos', Evento::count())
                ->description('Total de eventos')
                ->color('success'),
            Stat::make('Categorías', Categoria::count())
                ->description('Categorías registradas')
                ->color('info'),
            Stat::make('Boletos', TipoBoleto::count())
                ->description('Tipos de entrada')
                ->color('warning'),
            Stat::make('Galería', GaleriaFotos::query()->where('publicada', true)->count())
                ->description('Fotos publicadas')
                ->color('gray'),
            Stat::make('Cómo participar', ComoParticipar::query()->where('activo', true)->count())
                ->description('Pasos visibles en el sitio')
                ->color('info'),
            Stat::make('Mensajes', Contacto::count())
                ->description('Consultas recibidas')
                ->color('primary'),
        ];
    }
}
