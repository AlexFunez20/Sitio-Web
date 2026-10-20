<?php

namespace App\Filament\Resources\ComoParticipars\Schemas;

use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;

class ComoParticiparForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('titulo')
                    ->label('Título')
                    ->required()
                    ->maxLength(255),
                Textarea::make('descripcion')
                    ->label('Descripción')
                    ->required()
                    ->rows(3)
                    ->columnSpanFull(),
                TextInput::make('orden')
                    ->label('Orden')
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
