<?php

namespace App\Filament\Resources\Gurus\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class GuruForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
               FileUpload::make('foto')->required()->disk('public')
               ->directory('photos'),
               TextInput::make('nama')->required(),
               Select::make('jabatan')
                ->options([
                    'Kepala Sekolah' => 'Kepala Sekolah',
                    'Wakil Kepala Sekolah' => 'Wakil Kepala Sekolah',
                    'Kepala Program' => 'Kepala Program',
                    'Guru' => 'Guru',
                    'Stap TU' => 'Stap TU',
                ]),
               TextInput::make('bagian')->required(),
            ]);
    }
}
