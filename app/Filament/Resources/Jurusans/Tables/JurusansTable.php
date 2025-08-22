<?php

namespace App\Filament\Resources\Jurusans\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Actions\ViewAction;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class JurusansTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                 ImageColumn::make('foto')->disk('public')->circular(),
                TextColumn::make('nama_jurusan')->searchable(),
                TextColumn::make('pengertian')->searchable(),
            ])
            ->filters([
                //
            ])
            ->recordActions([
                EditAction::make(),
                ViewAction::make(),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }
}
