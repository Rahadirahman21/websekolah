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
    public function index(){
        $profil = Profils::get();
        $eskul = Eskuls::get();
        $jurusan = Jurusans::get();
        $rombel = Rombels::get();
        $sarpras = Sarpras::get();

        return view('welcome',compact('profil','eskul','jurusan','rombel','sarpras'));
    }
    public function profilIndex(){
        $profil = Profils::get();
        $eskul = Eskuls::get();
        $jurusan = Jurusans::get();
        $rombel = Rombels::get();
        $sarpras = Sarpras::get();

        return view('profil',compact('profil','eskul','jurusan','rombel','sarpras'));
    }
    public function eskulIndex(){
        $profil = Profils::get();
        $eskul = Eskuls::get();
        $jurusan = Jurusans::get();
        $rombel = Rombels::get();
        $sarpras = Sarpras::get();

        return view('eskul',compact('profil','eskul','jurusan','rombel','sarpras'));
    }
    public function jurusanIndex(){
        $profil = Profils::get();
        $eskul = Eskuls::get();
        $jurusan = Jurusans::get();
        $rombel = Rombels::get();
        $sarpras = Sarpras::get();

        return view('jurusan',compact('profil','eskul','jurusan','rombel','sarpras'));
    }
    public function rombelIndex(){
        $profil = Profils::get();
        $eskul = Eskuls::get();
        $jurusan = Jurusans::get();
        $rombel = Rombels::get();
        $sarpras = Sarpras::get();

        return view('rombel',compact('profil','eskul','jurusan','rombel','sarpras'));
    }
    public function sarprasIndex(){
        $profil = Profils::get();
        $eskul = Eskuls::get();
        $jurusan = Jurusans::get();
        $rombel = Rombels::get();
        $sarpras = Sarpras::get();

        return view('sarpras',compact('profil','eskul','jurusan','rombel','sarpras'));
    }
}
