@extends('layouts.layout')

@section('content')
    <div class="relative w-full md:w-3/4 mx-auto mt-5">
        <span class="absolute top-2 left-2 w-full h-full bg-black shadow-2xl "></span>
        <div
            class="relative bg-blue-100 shadow-lg  p-6 md:p-10 transform transition duration-300 hover:scale-105 hover:shadow-2xl border-2 border-gray-800">
            <h2 class="text-blue-500 font-bold text-2xl mb-4">Identitas Sekolah</h2>
            <table class="table-auto w-full ">
                <tbody>
                    <tr>
                        <td class="py-2 px-4 font-semibold">Nama Sekolah</td>
                        <td class="py-2 px-4">: {{ $identitas->nama_sekolah }}</td>
                    </tr>
                    <tr>
                        <td class="py-2 px-4 font-semibold">NPSN</td>
                        <td class="py-2 px-4">: {{ $identitas->npsn }}</td>
                    </tr>
                    <tr>
                        <td class="py-2 px-4 font-semibold">Alamat</td>
                        <td class="py-2 px-4">: {{ $identitas->alamat }}</td>
                    </tr>
                    <tr>
                        <td class="py-2 px-4 font-semibold">Telepon</td>
                        <td class="py-2 px-4">: {{ $identitas->telepon }}</td>
                    </tr>
                    <tr>
                        <td class="py-2 px-4 font-semibold">Email</td>
                        <td class="py-2 px-4">: {{ $identitas->email }}</td>
                    </tr>
                    <tr>
                        <td class="py-2 px-4 font-semibold">Tahun Berdiri</td>
                        <td class="py-2 px-4">: {{ $identitas->tahun_berdiri }}</td>
                    </tr>
                    <tr>
                        <td class="py-2 px-4 font-semibold">No SK</td>
                        <td class="py-2 px-4">: {{ $identitas->no_sk }}</td>
                    </tr>
                    <tr>
                        <td class="py-2 px-4 font-semibold">Tanggal SK</td>
                        <td class="py-2 px-4">: {{ $identitas->tgl_sk }}</td>
                    </tr>
                    <tr>
                        <td class="py-2 px-4 font-semibold">Kepemilikan</td>
                        <td class="py-2 px-4">: {{ $identitas->kepemilikan }}</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>


    @foreach ($profil as $p)
        <div class="py-10">
            <div class="relative w-full md:w-3/4 mx-auto ">
                <span class="absolute top-2 left-2 w-full h-full bg-black shadow-2xl "></span>
                <div
                    class="relative bg-blue-100 shadow-lg  p-6 md:p-10 transform transition duration-300 hover:scale-105 hover:shadow-2xl border-2 border-gray-800">
                    <div class="w-full">
                        <h3 class="text-blue-500 font-bold text-2xl mb-2">SEJARAH</h3>
                        <p class="  mb-4">{{ $p->sejarah }}</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="mb-5">
            <div class="relative w-full md:w-3/4 mx-auto ">
                <span class="absolute top-2 left-2 w-full h-full bg-black shadow-2xl "></span>
                <div
                    class="relative bg-blue-100 shadow-lg  p-6 md:p-10 transform transition duration-300 hover:scale-105 hover:shadow-2xl border-2 border-gray-800">
                    <div class="w-full">
                        <h3 class="text-blue-500 font-bold text-2xl mb-2">Visi</h3>
                        <h2 class=" mb-4">{{ $p->visi }}</h2>
                        <h2></h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="py-5">
            <div class="relative w-full md:w-3/4 mx-auto ">
                <span class="absolute top-2 left-2 w-full h-full bg-black shadow-2xl "></span>
                <div
                    class="relative bg-blue-100 shadow-lg  p-6 md:p-10 transform transition duration-300 hover:scale-105 hover:shadow-2xl border-2 border-gray-800">
                    <div class="w-full">
                        <h3 class="text-blue-500 font-bold text-2xl mb-2">Misi</h3>
                        <h2 class="">{{ $p->misi }}</h2>
                        <h2></h2>
                    </div>
                </div>
            </div>
        </div>
    @endforeach

    <section>

    </section>
@endsection
