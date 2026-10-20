<?php

namespace App\Filament\Resources\Eventos\Schemas;

use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Components\Utilities\Set;
use Filament\Schemas\Schema;
use Illuminate\Support\Str;

class EventoForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Select::make('categoria_id')
                    ->label('Categoría')
                    ->relationship('categoria', 'nombre')
                    ->searchable()
                    ->preload(),
                TextInput::make('nombre')
                    ->label('Nombre')
                    ->required()
                    ->maxLength(255)
                    ->live(onBlur: true)
                    ->afterStateUpdated(fn (?string $state, Set $set) => $set('slug', Str::slug($state ?? ''))),
                TextInput::make('slug')
                    ->label('Slug')
                    ->helperText('Se genera automáticamente al escribir el nombre.')
                    ->required()
                    ->maxLength(255)
                    ->unique(ignoreRecord: true),
                Textarea::make('descripcion')
                    ->label('Descripción')
                    ->required()
                    ->rows(4)
                    ->columnSpanFull(),
                DateTimePicker::make('fecha_inicio')
                    ->label('Fecha y hora de inicio')
                    ->required(),
                DateTimePicker::make('fecha_fin')
                    ->label('Fecha y hora de finalización')
                    ->after('fecha_inicio'),
                TextInput::make('lugar')
                    ->label('Lugar')
                    ->required()
                    ->maxLength(255),
                TextInput::make('direccion')
                    ->label('Dirección')
                    ->maxLength(255),
                FileUpload::make('imagen')
                    ->label('Imagen')
                    ->image()
                    ->disk('public')
                    ->directory('eventos'),
                Select::make('estado')
                    ->label('Estado')
                    ->options([
                        'borrador' => 'Borrador',
                        'publicado' => 'Publicado',
                        'cancelado' => 'Cancelado',
                    ])
                    ->required()
                    ->default('borrador'),
                Toggle::make('destacado')
                    ->label('Evento destacado'),
            ]);
    }
}
