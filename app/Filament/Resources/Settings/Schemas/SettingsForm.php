<?php

namespace App\Filament\Resources\Settings\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class SettingsForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                FileUpload::make('logo')->required()->disk('public')
               ->directory('photos'),
                TextInput::make('nama_sekolah')->required(),
                FileUpload::make('foto')->required()->disk('public')
               ->directory('photos'),
                TextInput::make('nama_kepsek')->required(),
                Textarea::make('sambutan')->required(),
                Textarea::make('alamat')->required(),
            
            ]);
    }
}
