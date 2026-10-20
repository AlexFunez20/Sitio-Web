<?php

namespace App\Filament\Resources\Contactos\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Filters\SelectFilter;
use Filament\Tables\Table;

class ContactosTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('nombre')
                    ->searchable()
                    ->sortable(),
                TextColumn::make('correo')
                    ->searchable(),
                TextColumn::make('telefono')
                    ->label('Teléfono'),
                TextColumn::make('asunto')
                    ->searchable(),
                TextColumn::make('leido')
                    ->label('Leído')
                    ->formatStateUsing(fn ($state) => $state ? 'Sí' : 'No')
                    ->sortable(),
            ])
            ->filters([
                SelectFilter::make('leido')
                    ->label('Leído')
                    ->options([
                        '1' => 'Leído',
                        '0' => 'Sin leer',
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
