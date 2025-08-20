<?php

namespace App\Filament\Resources\Eskuls\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class EskulsForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                FileUpload::make('foto')->required()->disk('public')
               ->directory('photos'),
                TextInput::make('nama_eskul')->required(),
                TextInput::make('jadwal')->required(),
                Textarea::make('detail')->required(),
            ]);
    }
}
