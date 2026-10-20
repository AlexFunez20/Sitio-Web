<?php

namespace App\Filament\Resources\GaleriaFotos\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;

class GaleriaFotosForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Select::make('evento_id')
                    ->label('Evento relacionado')
                    ->relationship('evento', 'nombre')
                    ->searchable()
                    ->preload(),
                TextInput::make('titulo')
                    ->label('Título')
                    ->required()
                    ->maxLength(255),
                Textarea::make('descripcion')
                    ->label('Descripción')
                    ->rows(3)
                    ->columnSpanFull(),
                FileUpload::make('imagen')
                    ->label('Fotografía')
                    ->image()
                    ->disk('public')
                    ->directory('galeria')
                    ->required(),
                TextInput::make('orden')
                    ->label('Orden')
                    ->required()
                    ->integer()
                    ->minValue(0)
                    ->default(0),
                Toggle::make('publicada')
                    ->label('Publicada')
                    ->default(true),
            ]);
    }
}
