<?php

namespace App\Filament\Resources\GaleriaFotos\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class GaleriaFotosTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                ImageColumn::make('imagen')
                    ->label('Foto')
                    ->size(60),
                TextColumn::make('titulo')
                    ->searchable()
                    ->sortable(),
                TextColumn::make('evento.nombre')
                    ->label('Evento')
                    ->sortable(),
                TextColumn::make('publicada')
                    ->label('Publicada')
                    ->formatStateUsing(fn ($state) => $state ? 'Sí' : 'No')
                    ->sortable(),
            ])
            ->recordActions([
                EditAction::make(),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }
}
