<?php

namespace App\Filament\Resources\GaleriaFotos\Pages;

use App\Filament\Resources\GaleriaFotos\GaleriaFotosResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditGaleriaFotos extends EditRecord
{
    protected static string $resource = GaleriaFotosResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
