<?php

namespace App\Filament\Resources\Gurus\Schemas;

use Filament\Forms\Components\FileUpload;
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
               TextInput::make('jabatan')->required(),
            ]);
    }
}
