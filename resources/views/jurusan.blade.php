@extends('layouts.layout')

@section('content')

<section>
        
    
</section>
{{-- <section class="b">
    <div class="flex items-center justify-center my-5">
        <h1 class="text-center font-bold text-2xl font">Kompetensi Keahlian SMKN 4 Tasikmalaya</h1>
    </div>
    <div class="flex justify-center gap-15 my-20 flex-wrap">
        @foreach ($jurusan as $jurusan)
        <div class="card bg-blue-200 w-96 shadow-lg  md:w-1/4 my-10 transform transition duration-300 hover:scale-105 hover:shadow-2xl">
            <figure>
                <img src="{{ asset('storage/'. $jurusan->foto) }}" alt="" width="100px" class=" rounded-full my-5">
            </figure>
            <div class="card-body ">
                <h2 class="card-title">{{ $jurusan->nama_jurusan }}</h2>
                <p class="line-clamp-3">{{ $jurusan->pengertian }}</p>
                <div class="card-actions justify-end">
                    <button class="btn btn-primary">Selengkapnya</button>
                </div>
            </div>
        </div>
        @endforeach
    </div>

</section> --}}
<section class="b">
    <div class="flex items-center justify-center my-5">
        <h1 class="text-center font-bold text-2xl font">Kompetensi Keahlian SMKN 4 Tasikmalaya</h1>
    </div>
    <div class="flex justify-center gap-15 my-20 flex-wrap">
        @foreach ($jurusan as $jurusan)
        <div class="card bg-gray-700 w-96 shadow-lg  md:w-1/4 my-10 transform transition duration-300 hover:scale-105 hover:shadow-2xl ">
            <figure>
                <img src="{{ asset('storage/'. $jurusan->foto) }}" alt="" width="100px" class="bg-white rounded  my-5">
            </figure>
            <div class="card-body text-white">
                <h2 class="card-title">{{ $jurusan->nama_jurusan }}</h2>
                <p class="line-clamp-3">{{ $jurusan->pengertian }}</p>
                <div class="card-actions justify-end">
                    <button class="btn btn-primary">Selengkapnya</button>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</section>
@endsection