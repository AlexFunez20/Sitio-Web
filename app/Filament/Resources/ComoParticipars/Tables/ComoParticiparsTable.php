<?php

namespace App\Filament\Resources\ComoParticipars\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class ComoParticiparsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('titulo')
                    ->searchable()
                    ->sortable(),
                TextColumn::make('orden')
                    ->sortable(),
                TextColumn::make('activo')
                    ->label('Activo')
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
