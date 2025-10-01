@extends('layouts.layout')

@section('content')
    <section class="">
        <div class="flex items-center justify-center py-10">
            <div class="relative inline-block">
                <span class="absolute top-2 left-2 w-full h-full bg-black  shadow-2xl "></span>
                <h1
                    class="relative text-center font-bold text-2xl bg-blue-100 w-130 py-5  
  transform transition duration-300 hover:scale-105 text-blue-500 border-2 border-gray-800">
                    Kompetensi Keahlian SMKN 4 Tasikmalaya
                </h1>
            </div>
        </div>
        <div class="flex justify-center gap-15 flex-wrap px-4">
            @foreach ($jurusan as $jurusan)
                <div class="relative w-96 md:w-1/4 my-10">
                    <span class="absolute top-2 left-2 w-full h-full bg-black shadow-2xl "></span>
                    <div
                        class="relative bg-blue-100 w-full h-[400px] shadow-lg transform transition duration-300 hover:scale-105 hover:shadow-2xl border-2 border-gray-800 ">
                        <figure>
                            <img src="{{ asset('storage/' . $jurusan->foto) }}" alt="" width="100px"
                                class="bg-blue-100 rounded my-5 mx-auto">
                        </figure>
                        <div class="card-body ">
                            <h2 class="card-title">{{ $jurusan->nama_jurusan }}</h2>
                            <p class="line-clamp-3">{{ $jurusan->pengertian }}</p>
                            <div class="card-actions justify-end">
                                <button class="btn btn-primary">Selengkapnya</button>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </section>
@endsection
