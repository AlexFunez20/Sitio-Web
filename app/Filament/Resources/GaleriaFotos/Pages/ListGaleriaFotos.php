<?php

namespace App\Filament\Resources\GaleriaFotos\Pages;

use App\Filament\Resources\GaleriaFotos\GaleriaFotosResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListGaleriaFotos extends ListRecords
{
    protected static string $resource = GaleriaFotosResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
