<?php

namespace App\Filament\Resources\Rombels\Schemas;

use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class RombelsForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
               Select::make('jurusan')
                ->options([
                    'ruang_kelas' => 'Ruang Kelas',
                    'ruang_praktik' => 'Ruang Praktik',
                    'ruang_penunjang' => 'Ruang Penunjang',
                ]),
                TextInput::make('nama_kelas')->required(),
                TextInput::make('jml_perempuan')->required(),
                TextInput::make('jml_laki-laki')->required(),
            ]);
    }
}
