@extends('layouts.layout')

@section('content')

  
<section class="b">
    <h1 class="text-center font-bold text-2xl mb-8">Ekstrakulikuler SMKN 4 Tasikmalaya</h1>
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8 max-w-6xl mx-auto">
        @foreach ($eskul as $eskul)
            <div class="card bg-gray-700 shadow-lg rounded-lg overflow-hidden transform transition duration-300 hover:scale-105 hover:shadow-2xl">
                <div class="h-56 w-full overflow-hidden">
                    <img src="{{ asset('storage/' . $eskul->foto) }}" alt="{{ $eskul->nama_eskul }}" 
                         class="w-full h-full object-cover">
                </div>
                <div class="card-body p-4 text-white">
                    <h2 class="card-title text-lg font-semibold mb-2">{{ $eskul->nama_eskul }}</h2>
                    <p class="text-sm mb-1">Jadwal: {{ $eskul->jadwal }}</p>
                    <p class="text-gray-300 text-sm mb-4">{{ Str::limit($eskul->detail, 80) }}</p>
                    
                    <div class="card-actions justify-end">
                        <button class="btn btn-primary px-4 py-2 rounded-md bg-blue-600 hover:bg-blue-700 transition">
                            Selengkapnya
                        </button>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</section>

@endsection