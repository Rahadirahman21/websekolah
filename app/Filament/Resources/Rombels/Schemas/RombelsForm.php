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
                    'PPLG' => 'PPLG',
                    'TJKT' => 'TJKT',
                    'TBSM' => 'TBSM',
                    'TOI' => 'TOI',
                    'DKV' => 'DKV',
                ]),
                TextInput::make('nama_kelas')->required(),
                TextInput::make('jml_perempuan')->required(),
                TextInput::make('jml_laki-laki')->required(),
            ]);
    }
}
