<?php

namespace App\Filament\Resources\TipoBoletos\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Filters\SelectFilter;
use Filament\Tables\Table;

class TipoBoletosTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('evento.nombre')
                    ->label('Evento')
                    ->searchable()
                    ->sortable(),
                TextColumn::make('nombre')
                    ->searchable()
                    ->sortable(),
                TextColumn::make('precio')
                    ->money('HNL')
                    ->sortable(),
                TextColumn::make('cantidad_disponible')
                    ->label('Disponibles')
                    ->sortable(),
                TextColumn::make('activo')
                    ->label('Activo')
                    ->formatStateUsing(fn ($state) => $state ? 'Sí' : 'No')
                    ->sortable(),
            ])
            ->filters([
                SelectFilter::make('activo')
                    ->options([
                        '1' => 'Activo',
                        '0' => 'Inactivo',
                    ]),
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
