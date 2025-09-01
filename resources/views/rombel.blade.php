@extends('layouts.layout')

@section('content')

<section>
        
    
</section>
<section class="b">
    <div class="flex items-center justify-center my-5">
        <h1 class="text-center font-bold text-2xl">Rombongan Belajar SMKN 4 Tasikmalaya</h1>
    </div>
    @foreach ($rombels as $jurusan => $listRombel)
        <h2 class="text-xl font-semibold my-4 ms-10">{{ $jurusan }}</h2>
        <div class="flex justify-center gap-10 my-10 flex-wrap">
            @foreach ($listRombel as $rombel)
                <div class="card bg-gray-700 w-96 shadow-sm transform transition duration-300 hover:scale-105 hover:shadow-2xl">
                    <div class="card-body text-white">
                        <h2 class="card-title font-drak">{{ $rombel->nama_kelas }}</h2>
                        <p>Anggota Rombel : {{ $rombel->jml_perempuan + $rombel->jml_laki_laki }}</p>
                        <p>Perempuan : {{ $rombel->jml_perempuan }}</p>
                        <p>Laki - Laki : {{ $rombel->jml_laki_laki }}</p>
                        <div class="card-actions justify-end">
                            <button class="btn btn-primary">Selengkapnya</button>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    @endforeach
</section>



@endsection