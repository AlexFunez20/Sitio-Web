<?php

namespace App\Filament\Resources\TipoBoletos\Pages;

use App\Filament\Resources\TipoBoletos\TipoBoletoResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditTipoBoleto extends EditRecord
{
    protected static string $resource = TipoBoletoResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
