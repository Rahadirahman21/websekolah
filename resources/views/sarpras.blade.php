@extends('layouts.layout')

@section('content')

<section class="">
    <div class="flex items-center justify-center py-10 ">
        <h1 class="text-center font-bold text-2xl bg-black w-130 text-white py-5 rounded-md shadow-lg transform transition duration-300 hover:scale-105 hover:shadow-4xl">Sarana Prasarana  SMKN 4 Tasikmalaya</h1>
    </div>
    @foreach ($sarpras as $jenis => $listSarpras)
    <div class="bg-black">
        <h2 class="text-xl font-semibold py-5 text-white ms-10">{{ $jenis }}</h2>
    </div>
        <div class="flex justify-center gap-10 my-10 flex-wrap">
            @foreach ($listSarpras as $sarpras)
                <div class="card bg-black w-96 shadow-sm transform transition duration-300 hover:scale-105 hover:shadow-2xl">
                    <div class="h-56 w-full overflow-hidden">
                    <img src="{{ asset('storage/' . $sarpras->foto) }}" alt="{{ $sarpras->nama_tempat }}" 
                         class="w-full h-full object-cover">
                </div>
                    <div class="card-body text-white">
                        <h2 class="card-title font-drak">{{ $sarpras->nama_tempat }}</h2>
                    </div>
                </div>
            @endforeach
        </div>
    @endforeach
</section>
@endsection