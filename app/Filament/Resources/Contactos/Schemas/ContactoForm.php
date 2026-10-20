<?php

namespace App\Filament\Resources\Contactos\Schemas;

use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;

class ContactoForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('nombre')
                    ->label('Nombre')
                    ->required()
                    ->maxLength(255),
                TextInput::make('correo')
                    ->label('Correo electrónico')
                    ->email()
                    ->required()
                    ->maxLength(255),
                TextInput::make('telefono')
                    ->label('Teléfono')
                    ->tel()
                    ->maxLength(255),
                TextInput::make('asunto')
                    ->label('Asunto')
                    ->maxLength(255),
                Textarea::make('mensaje')
                    ->label('Mensaje')
                    ->required()
                    ->rows(5)
                    ->columnSpanFull(),
                Toggle::make('leido')
                    ->label('Leído'),
            ]);
    }
}
