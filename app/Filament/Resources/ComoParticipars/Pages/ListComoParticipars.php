<?php

namespace App\Filament\Resources\ComoParticipars\Pages;

use App\Filament\Resources\ComoParticipars\ComoParticiparResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListComoParticipars extends ListRecords
{
    protected static string $resource = ComoParticiparResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
