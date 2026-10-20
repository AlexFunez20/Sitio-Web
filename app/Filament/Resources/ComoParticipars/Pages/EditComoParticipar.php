<?php

namespace App\Filament\Resources\ComoParticipars\Pages;

use App\Filament\Resources\ComoParticipars\ComoParticiparResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditComoParticipar extends EditRecord
{
    protected static string $resource = ComoParticiparResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
