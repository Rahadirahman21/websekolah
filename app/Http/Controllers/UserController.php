<?php

namespace App\Http\Controllers;

use App\Models\Beritas;
use App\Models\Eskuls;
use App\Models\Guru;
use App\Models\Identitas;
use App\Models\Jurusans;
use App\Models\Profils;
use App\Models\Rombels;
use App\Models\Sarpras;
use App\Models\Settings;
use App\Models\Siswa;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $jml_guru = Guru::count();
        $jml_jurusan = Jurusans::count();
        $jml_eskul = Eskuls::count();
        $jml_rombel = Rombels::count();
        $guru = Guru::get();
        $berita = Beritas::get();
        $setting = Settings::get();
        $profil = Profils::first()->get(); 
        $eskul = Eskuls::all();
        $jurusan = Jurusans::all();
        $rombel = Rombels::all();
        $sarpras = Sarpras::all();
        $siswa = Siswa::all();
        $identitas = Identitas::first();

        return view('welcome', compact('identitas','siswa','jml_rombel','jml_eskul','jml_jurusan','jml_guru','guru','berita','setting','profil','eskul','jurusan','rombel','sarpras'));
    }

    public function profilIndex()
    {
        $profil = Profils::first()->get();
        $eskul = Eskuls::all();
        $jurusan = Jurusans::all();
        $rombel = Rombels::all();
        $sarpras = Sarpras::all();
        $identitas = Identitas::first();


        return view('profil', compact('identitas','profil','eskul','jurusan','rombel','sarpras'));
    }

    public function eskulIndex()
    {
        $profil = Profils::first()->get();
        $eskul = Eskuls::all();
        $jurusan = Jurusans::all();
        $rombel = Rombels::all();
        $sarpras = Sarpras::all();

        return view('eskul', compact('profil','eskul','jurusan','rombel','sarpras'));
    }

    public function jurusanIndex()
    {
        $profil = Profils::first()->get();
        $eskul = Eskuls::all();
        $jurusan = Jurusans::all();
        $rombel = Rombels::all();
        $sarpras = Sarpras::all();

        return view('jurusan', compact('profil','eskul','jurusan','rombel','sarpras'));
    }

    public function rombelIndex()
    {
        $profil = Profils::first()->get();
        $eskul = Eskuls::all();
        $jurusan = Jurusans::all();
        $rombel = Rombels::all();
        $sarpras = Sarpras::all();
        $rombels = Rombels::all()->groupBy('jurusan'); // Group by field 'jurusan'

        return view('rombel', compact('rombels','profil','eskul','jurusan','rombel','sarpras'));
    }

    public function sarprasIndex()
    {
        $profil = Profils::first()->get();
        $eskul = Eskuls::all();
        $jurusan = Jurusans::all();
        $rombel = Rombels::all();
        $sarpras = Sarpras::all();
        $sarpras = Sarpras::all()->groupBy('jenis'); // Group by field 'jurusan'

        return view('sarpras', compact('sarpras','profil','eskul','jurusan','rombel','sarpras'));
    }
    public function guruIndex()
    {
        $profil = Profils::first()->get();
        $eskul = Eskuls::all();
        $guru = Guru::all();
        $jurusan = Jurusans::all();
        $rombel = Rombels::all();
        $sarpras = Sarpras::all();
        $sarpras = Sarpras::all()->groupBy('jenis'); // Group by field 'jurusan'
        $gurus = Guru::all()->groupBy('jabatan'); // Group by field 'jurusan'

        return view('guru', compact('gurus','guru','sarpras','profil','eskul','jurusan','rombel','sarpras'));
    }
}
