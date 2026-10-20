<?php

namespace App\Filament\Resources\ComoParticipars;

use App\Filament\Resources\ComoParticipars\Pages\CreateComoParticipar;
use App\Filament\Resources\ComoParticipars\Pages\EditComoParticipar;
use App\Filament\Resources\ComoParticipars\Pages\ListComoParticipars;
use App\Filament\Resources\ComoParticipars\Schemas\ComoParticiparForm;
use App\Filament\Resources\ComoParticipars\Tables\ComoParticiparsTable;
use App\Models\ComoParticipar;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class ComoParticiparResource extends Resource
{
    protected static ?string $model = ComoParticipar::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    public static function form(Schema $schema): Schema
    {
        return ComoParticiparForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return ComoParticiparsTable::configure($table);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListComoParticipars::route('/'),
            'create' => CreateComoParticipar::route('/create'),
            'edit' => EditComoParticipar::route('/{record}/edit'),
        ];
    }
}
