<?php

namespace App\Filament\Resources\Sarpras\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class SarprasForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Select::make('jenis')
                ->options([
                    'Ruang Kelas' => 'Ruang Kelas',
                    'Ruang Praktik' => 'Ruang Praktik',
                    'Ruang Penunjang' => 'Ruang Penunjang',
                ]),
                FileUpload::make('foto')->required()->disk('public')->directory('photos'),
                TextInput::make('nama_tempat')->required(),
                
            ]);
    }
}
