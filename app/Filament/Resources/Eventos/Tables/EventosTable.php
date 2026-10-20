<?php

namespace App\Filament\Resources\Eventos\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Filters\SelectFilter;
use Filament\Tables\Table;

class EventosTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                ImageColumn::make('imagen')
                    ->label('Imagen')
                    ->circular(false)
                    ->size(60),
                TextColumn::make('nombre')
                    ->searchable()
                    ->sortable(),
                TextColumn::make('categoria.nombre')
                    ->label('Categoría')
                    ->sortable(),
                TextColumn::make('fecha_inicio')
                    ->label('Inicio')
                    ->dateTime('d/m/Y H:i')
                    ->sortable(),
                TextColumn::make('estado')
                    ->badge()
                    ->sortable(),
                TextColumn::make('destacado')
                    ->label('Destacado')
                    ->formatStateUsing(fn ($state) => $state ? 'Sí' : 'No')
                    ->sortable(),
            ])
            ->filters([
                SelectFilter::make('estado')
                    ->options([
                        'borrador' => 'Borrador',
                        'publicado' => 'Publicado',
                        'cancelado' => 'Cancelado',
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
