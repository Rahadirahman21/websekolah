<?php

namespace App\Http\Controllers;

use App\Models\Eskuls;
use App\Models\Jurusans;
use App\Models\Profils;
use App\Models\Rombels;
use App\Models\Sarpras;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $profil = Profils::first()->get(); 
        $eskul = Eskuls::all();
        $jurusan = Jurusans::all();
        $rombel = Rombels::all();
        $sarpras = Sarpras::all();

        return view('welcome', compact('profil','eskul','jurusan','rombel','sarpras'));
    }

    public function profilIndex()
    {
        $profil = Profils::first()->get();
        $eskul = Eskuls::all();
        $jurusan = Jurusans::all();
        $rombel = Rombels::all();
        $sarpras = Sarpras::all();

        return view('profil', compact('profil','eskul','jurusan','rombel','sarpras'));
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

        return view('sarpras', compact('profil','eskul','jurusan','rombel','sarpras'));
    }
}
