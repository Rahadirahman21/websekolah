@extends('layouts.layout')

@section('content')

<section class="">
    <div class="flex items-center justify-center py-10 ">
        <h1 class="text-center font-bold text-2xl bg-black w-130 text-white py-5 rounded-md shadow-lg transform transition duration-300 hover:scale-105 hover:shadow-4xl">Pegawai  SMKN 4 Tasikmalaya</h1>
    </div>
    @foreach ($gurus as $jabatan => $listGurus)
    <div class="bg-black">
        <h2 class="text-xl font-semibold py-5 text-white ms-10">{{ $jabatan }}</h2>
    </div>
        <div class="flex justify-center gap-10 my-10 flex-wrap">
            @foreach ($listGurus as $gurus)
                <div class="card bg-black w-96 shadow-sm transform transition duration-300 hover:scale-105 hover:shadow-2xl">
                    <div class="h-80 w-full overflow-hidden">
                    <img src="{{ asset('storage/' . $gurus->foto) }}" alt="" 
                         class="w-full h-full object-cover">
                </div>
                    <div class="card-body text-white items-center">
                        <h2 class="card-title font-drak ">{{ $gurus->nama }}</h2>
                    </div>
                </div>
            @endforeach
        </div>
    @endforeach
</section>
@endsection