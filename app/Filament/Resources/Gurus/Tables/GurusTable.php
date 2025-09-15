<?php

namespace App\Filament\Resources\Gurus\Tables;

use Filament\Actions\BulkAction;
use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Notifications\Notification;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Collection;

class GurusTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                ImageColumn::make('foto')->disk('public')->circular(),
                TextColumn::make('nama')->searchable(),
                TextColumn::make('jabatan')->searchable(),
                TextColumn::make('bagian')->searchable(),
            ])
            ->recordActions([
                EditAction::make(),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),

                    BulkAction::make('ubah_data')
                        ->label('Ubah Data Terpilih')
                        ->form([
                            Select::make('jabatan')
                                ->label('Jabatan')
                                ->options([
                                    'Kepala Sekolah' => 'Kepala Sekolah',
                                    'Wakil Kepala Sekolah' => 'Wakil Kepala Sekolah',
                                    'Kepala Program' => 'Kepala Program',
                                    'Guru' => 'Guru',
                                    'Stap TU' => 'Stap TU',
                                ])
                                ->nullable(),

                            TextInput::make('bagian')
                                ->label('Bagian')
                                ->nullable(),
                        ])
                        ->action(function (Collection $records, array $data): void {
                            $updates = collect($data)
                                ->filter(fn($value) => filled($value)) 
                                ->all();

                            if ($updates) {
                                foreach ($records as $record) {
                                    $record->update($updates);
                                }
                            }
                        })
                ]),
            ]);
    }
}
