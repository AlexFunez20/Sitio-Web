<?php

namespace App\Filament\Resources\TipoBoletos\Schemas;

use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;

class TipoBoletoForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Select::make('evento_id')
                    ->label('Evento')
                    ->relationship('evento', 'nombre')
                    ->searchable()
                    ->preload()
                    ->required(),
                TextInput::make('nombre')
                    ->label('Nombre del tipo de boleto')
                    ->required()
                    ->maxLength(255),
                Textarea::make('descripcion')
                    ->label('Descripción')
                    ->rows(3)
                    ->columnSpanFull(),
                TextInput::make('precio')
                    ->label('Precio')
                    ->required()
                    ->numeric()
                    ->minValue(0)
                    ->prefix('L'),
                TextInput::make('cantidad_disponible')
                    ->label('Cantidad disponible')
                    ->required()
                    ->integer()
                    ->minValue(0)
                    ->default(0),
                Toggle::make('activo')
                    ->label('Activo')
                    ->default(true),
            ]);
    }
}
