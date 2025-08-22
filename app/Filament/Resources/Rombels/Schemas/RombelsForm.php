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
                    'PENGEMBANGAN PERANGKAT LUNAK DAN GIM' => 'PENGEMBANGAN PERANGKAT LUNAK DAN GIM',
                    'TENIK JARINGAN KOMPUTER DAN TELEKOMUNIKASI' => 'TENIK JARINGAN KOMPUTER DAN TELEKOMUNIKASI',
                    'TEKNIK BISNIS SEPEDAH MOTOR' => 'TEKNIK BISNIS SEPEDAH MOTOR',
                    'TEKNIK OTOMASI INDUSTRI' => 'TEKNIK OTOMASI INDUSTRI',
                    'DESAIN KOMUNIKASI VISUAL' => 'DESAIN KOMUNIKASI VISUAL',
                ]),
                TextInput::make('nama_kelas')->required(),
                TextInput::make('jml_perempuan')->required(),
                TextInput::make('jml_laki_laki')->required(),
            ]);
    }
}
