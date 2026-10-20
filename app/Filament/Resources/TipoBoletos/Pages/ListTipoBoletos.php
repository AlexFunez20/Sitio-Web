<?php

namespace App\Filament\Resources\TipoBoletos\Pages;

use App\Filament\Resources\TipoBoletos\TipoBoletoResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListTipoBoletos extends ListRecords
{
    protected static string $resource = TipoBoletoResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
