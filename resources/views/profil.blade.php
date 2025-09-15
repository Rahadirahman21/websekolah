@extends('layouts.layout')

@section('content')
<div class="container mx-auto px-4 py-10">
  <div class="bg-black shadow-lg rounded-lg p-6 md:p-10">
    <h2 class="text-blue-500 font-bold text-2xl mb-4">Identitas Sekolah</h2>

    <table class="table-auto w-full text-white ">
      <tbody>
        <tr><td class="py-2 px-4 font-semibold">Nama Sekolah</td><td class="py-2 px-4">: {{ $identitas->nama_sekolah }}</td></tr>
        <tr><td class="py-2 px-4 font-semibold">NPSN</td><td class="py-2 px-4">: {{ $identitas->npsn }}</td></tr>
        <tr><td class="py-2 px-4 font-semibold">Alamat</td><td class="py-2 px-4">: {{ $identitas->alamat }}</td></tr>
        <tr><td class="py-2 px-4 font-semibold">Telepon</td><td class="py-2 px-4">: {{ $identitas->telepon }}</td></tr>
        <tr><td class="py-2 px-4 font-semibold">Email</td><td class="py-2 px-4">: {{ $identitas->email }}</td></tr>
        <tr><td class="py-2 px-4 font-semibold">Tahun Berdiri</td><td class="py-2 px-4">: {{ $identitas->tahun_berdiri }}</td></tr>
        <tr><td class="py-2 px-4 font-semibold">No SK</td><td class="py-2 px-4">: {{ $identitas->no_sk }}</td></tr>
        <tr><td class="py-2 px-4 font-semibold">Tanggal SK</td><td class="py-2 px-4">: {{ $identitas->tgl_sk }}</td></tr>
        <tr><td class="py-2 px-4 font-semibold">Kepemilikan</td><td class="py-2 px-4">: {{ $identitas->kepemilikan }}</td></tr>
      </tbody>
    </table>
  </div>
</div>


@foreach ($profil as $p)
<section class="">
  <div class="container mx-auto px-4 py-10 ">
    <div class="bg-black shadow-lg rounded-lg p-6 md:p-10 flex flex-col md:flex-row gap-6 items-centertransform transition duration-300 hover:scale-105 hover:shadow-2xl ">
      <div class="w-full">
        <h3 class="text-blue-500 font-bold text-2xl mb-2">SEJARAH</h3>
        <p class="text-white  mb-4">{{ $p->sejarah }}</p>
      </div>
    </div>
  </div>
  <div class="container mx-auto px-4 py-10 ">
    <div class="bg-black shadow-lg rounded-lg p-6 md:p-10 flex flex-col md:flex-row gap-6 items-center transform transition duration-300 hover:scale-105 hover:shadow-2xl ">
      <div class="w-full">
        <h3 class="text-blue-500 font-bold text-2xl mb-2">Visi</h3>
        <h2 class="text-white mb-4">{{ $p->visi }}</h2>
        <h2></h2>
      </div>
    </div>
  </div>
  <div class="container mx-auto px-4 py-10 ">
    <div class="bg-black shadow-lg rounded-lg p-6 md:p-10 flex flex-col md:flex-row gap-6 items-center transform transition duration-300 hover:scale-105 hover:shadow-2xl ">
      <div class="w-full">
        <h3 class="text-blue-500 font-bold text-2xl mb-2">Misi</h3>
        <h2 class="text-white">{{ $p->misi }}</h2>
        <h2></h2>
      </div>
    </div>
  </div>
</section>
@endforeach

<section>
  
</section>
@endsection