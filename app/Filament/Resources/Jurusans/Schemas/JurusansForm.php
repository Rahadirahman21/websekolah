<?php

namespace App\Filament\Resources\Jurusans\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class JurusansForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
               FileUpload::make('foto')->required()
               ->disk('public')
               ->directory('photos'),
                TextInput::make('nama_jurusan')->required(),
                Textarea::make('pengertian')->required(),
            ]);
    }
}
