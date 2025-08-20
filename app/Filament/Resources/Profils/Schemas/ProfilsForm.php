<?php

namespace App\Filament\Resources\Profils\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class ProfilsForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                FileUpload::make('logo')->required()->disk('public')
               ->directory('photos'),
                TextInput::make('nama_sekolah')->required(),
                TextInput::make('nama_kepsek')->required(),
                Textarea::make('sejarah')->required(),
                TextInput::make('visi')->required(),
                Textarea::make('misi')->required(),
            ]);
    }
}
