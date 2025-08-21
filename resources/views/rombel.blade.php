@extends('layouts.layout')

@section('content')

<section>
        <div class="carousel w-full">
  <div id="slide1" class="carousel-item relative w-full">
    <img
      src="https://img.daisyui.com/images/stock/photo-1625726411847-8cbb60cc71e6.webp"
      class="w-full" />
    <div class="absolute left-5 right-5 top-1/2 flex -translate-y-1/2 transform justify-between">
      <a href="#slide4" class="btn btn-circle">❮</a>
      <a href="#slide2" class="btn btn-circle">❯</a>
    </div>
  </div>
  <div id="slide2" class="carousel-item relative w-full">
    <img
      src="https://img.daisyui.com/images/stock/photo-1609621838510-5ad474b7d25d.webp"
      class="w-full" />
    <div class="absolute left-5 right-5 top-1/2 flex -translate-y-1/2 transform justify-between">
      <a href="#slide1" class="btn btn-circle">❮</a>
      <a href="#slide3" class="btn btn-circle">❯</a>
    </div>
  </div>
  <div id="slide3" class="carousel-item relative w-full">
    <img
      src="https://img.daisyui.com/images/stock/photo-1414694762283-acccc27bca85.webp"
      class="w-full" />
    <div class="absolute left-5 right-5 top-1/2 flex -translate-y-1/2 transform justify-between">
      <a href="#slide2" class="btn btn-circle">❮</a>
      <a href="#slide4" class="btn btn-circle">❯</a>
    </div>
  </div>
  <div id="slide4" class="carousel-item relative w-full">
    <img
      src="https://img.daisyui.com/images/stock/photo-1665553365602-b2fb8e5d1707.webp"
      class="w-full" />
    <div class="absolute left-5 right-5 top-1/2 flex -translate-y-1/2 transform justify-between">
      <a href="#slide3" class="btn btn-circle">❮</a>
      <a href="#slide1" class="btn btn-circle">❯</a>
    </div>
  </div>
</div>
    
</section>
<section >
    <div class="flex items-center justify-center my-5">
        <h1 class="text-center font-bold text-2xl font">Rombongan Belajar SMKN 4 Tasikmalaya</h1>
    </div>
    <div class="flex justify-center gap-10 my-10">

        @foreach ($rombel as $rombel)
        <div class="card bg-blue-100 w-96 shadow-sm ">
            {{-- <figure>
                <img src="{{ asset('storage/'. $jurusan->foto) }}" alt="" width="100px" class=" rounded-full my-5">
            </figure> --}}
            <div class="card-body">
                <h2 class="card-title">{{ $rombel->nama_kelas }}</h2>
                <p>{{ $rombel->jml_perempuan }}</p>
                <p>{{ $rombel->jml_laki_laki }}</p>
                <div class="card-actions justify-end">
                    <button class="btn btn-primary">Selengkapnya</button>
                </div>
            </div>
        </div>
        @endforeach
    </div>

</section>
@endsection