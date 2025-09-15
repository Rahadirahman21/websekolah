<?php

namespace App\Filament\Resources\Identitas\Schemas;

use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class IdentitasForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('nama_sekolah')->required(),
                TextInput::make('npsn')->required(),
                Textarea::make('alamat')->required(),
                TextInput::make('telepon')->required(),
                TextInput::make('email')->required(),
                TextInput::make('tahun_berdiri')->required(),
                TextInput::make('no_sk')->required(),
                TextInput::make('tgl_sk')->required(),
                TextInput::make('kepemilikan')->required(),
            ]);
    }
}
