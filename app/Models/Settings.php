<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Settings extends Model
{
    use HasFactory;

    protected $fillable = [
        'logo',
        'nama_sekolah',
        'foto',
        'nama_kepsek',
        'sambutan',
        'alamat',
        'berita',
        'detail',
    ];
}
