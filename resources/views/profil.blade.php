@extends('layouts.layout')

@section('content')
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