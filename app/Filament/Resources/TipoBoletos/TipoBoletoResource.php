<?php

namespace App\Filament\Resources\TipoBoletos;

use App\Filament\Resources\TipoBoletos\Pages\CreateTipoBoleto;
use App\Filament\Resources\TipoBoletos\Pages\EditTipoBoleto;
use App\Filament\Resources\TipoBoletos\Pages\ListTipoBoletos;
use App\Filament\Resources\TipoBoletos\Schemas\TipoBoletoForm;
use App\Filament\Resources\TipoBoletos\Tables\TipoBoletosTable;
use App\Models\TipoBoleto;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class TipoBoletoResource extends Resource
{
    protected static ?string $model = TipoBoleto::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    public static function form(Schema $schema): Schema
    {
        return TipoBoletoForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return TipoBoletosTable::configure($table);
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
            'index' => ListTipoBoletos::route('/'),
            'create' => CreateTipoBoleto::route('/create'),
            'edit' => EditTipoBoleto::route('/{record}/edit'),
        ];
    }
}
