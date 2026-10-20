<?php

namespace App\Filament\Resources\GaleriaFotos;

use App\Filament\Resources\GaleriaFotos\Pages\CreateGaleriaFotos;
use App\Filament\Resources\GaleriaFotos\Pages\EditGaleriaFotos;
use App\Filament\Resources\GaleriaFotos\Pages\ListGaleriaFotos;
use App\Filament\Resources\GaleriaFotos\Schemas\GaleriaFotosForm;
use App\Filament\Resources\GaleriaFotos\Tables\GaleriaFotosTable;
use App\Models\GaleriaFotos;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class GaleriaFotosResource extends Resource
{
    protected static ?string $model = GaleriaFotos::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    public static function form(Schema $schema): Schema
    {
        return GaleriaFotosForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return GaleriaFotosTable::configure($table);
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
            'index' => ListGaleriaFotos::route('/'),
            'create' => CreateGaleriaFotos::route('/create'),
            'edit' => EditGaleriaFotos::route('/{record}/edit'),
        ];
    }
}
