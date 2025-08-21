<?php

namespace App\Filament\Resources\Eskuls\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Forms\Components\Textarea;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class EskulsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                 ImageColumn::make('foto')->visibility('public')->circular(),
                TextColumn::make('nama_eskul')->searchable(),
                TextColumn::make('jadwal')->searchable(),
                TextColumn::make('detail')->searchable(),
            ])
            ->filters([
                //
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
