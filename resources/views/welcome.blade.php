@extends('layouts.layout')

@section('content')
@foreach ($setting as $s)
<section class=" bg-center bg-cover bg-no-repeat h-200" style="background-image: url('{{ asset('storage/coba/bg2.jpg') }}');">
  
</section>

  
<section class="">
  <div class="container mx-auto px-4 py-10 ">
    <div class="bg-white shadow-lg rounded-lg p-6 md:p-10 flex flex-col md:flex-row gap-6 items-centertransform transition duration-300 hover:scale-105 hover:shadow-2xl ">
      
      <div class="md:w-1/2 flex justify-center">
        <img src="{{ asset('storage/'. $s->foto) }}" alt="Kepala Sekolah" class="rounded-lg w-full max-w-sm object-cover ">
      </div>
      <div class="md:w-1/2">
        <h3 class="text-blue-500 font-semibold text-lg mb-2">Sambutan Kepala Sekolah</h3>
        <h2 class="text-gray-800 font-bold text-2xl md:text-3xl mb-4">{{ $s->nama_kepsek }}</h2>
        <h2>{{ $s->sambutan }}</h2>
      </div>
    </div>
  </div>
</section>
@endforeach
<section class="relative py-12 bg-gradient-to-br from-gray-900 via-gray-700 to-gray-900 text-white overflow-hidden">
  <div class="flex items-center justify-center my-5">
        <h1 class="text-center font-bold text-2xl font">Statistik SMKN 4 Tasikmalaya</h1>
    </div>
    <div class="flex justify-center gap-15 my-20 flex-wrap">
        <div class="card bg-gray-700 w-75 shadow-lg   my-10 transform transition duration-300 hover:scale-105 hover:shadow-2xl ">
            <div class="card-body items-center">
                <h2 class="card-title">Guru</h2>
                  <h1 class="text-4xl font-bold counter" data-count="{{ $jml_guru }}"></h1>
            </div>
        </div>
        <div class="card bg-gray-700 w-75 shadow-lg  my-10 transform transition duration-300 hover:scale-105 hover:shadow-2xl ">
            <div class="card-body items-center">
                @foreach ($siswa as $siswa)   
                <h2 class="card-title">Siswa</h2>
                <h1 class="text-4xl font-bold counter" data-count="{{ $siswa->jml_siswa }}"></h1>
                @endforeach
            </div>
        </div>
        <div class="card bg-gray-700 w-75 shadow-lg  my-10 transform transition duration-300 hover:scale-105 hover:shadow-2xl ">
            <div class="card-body items-center">
                <h2 class="card-title">Konsentrasi Keahlian</h2>
                <h1 class="text-4xl font-bold counter" data-count="{{ $jml_jurusan }}"></h1>
            </div>
        </div>
        <div class="card bg-gray-700 w-75 shadow-lg  my-10 transform transition duration-300 hover:scale-105 hover:shadow-2xl ">
            <div class="card-body items-center">
                <h2 class="card-title">Ekstrakulikuler</h2>
                <h1 class="text-4xl font-bold counter" data-count="{{ $jml_eskul }}"></h1>
            </div>
        </div>
        <div class="card bg-gray-700 w-75 shadow-lg  my-10 transform transition duration-300 hover:scale-105 hover:shadow-2xl ">
            <div class="card-body items-center">
                <h2 class="card-title text-center">Rombongan Belajar</h2>
                <h1 class="text-4xl font-bold counter" data-count="{{ $jml_rombel }}"></h1>
            </div>
        </div>
    </div>
</section>
<section class="b">
    <div class="flex items-center justify-center py-10">
        <h1 class="text-center font-bold text-2xl bg-black w-130 text-white py-5 rounded-md shadow-sm transform transition duration-300 hover:scale-105 hover:shadow-2xl">Berita SMKN 4 Tasikmalaya</h1>
    </div>
    <div class="flex justify-center gap-15 flex-wrap">
        @foreach ($berita as $berita)
        <div class="card bg-gray-900 w-96 shadow-lg  md:w-1/4 my-10 transform transition duration-300 hover:scale-105 hover:shadow-2xl ">
            <figure>
                <img src="{{ asset('storage/'. $berita->foto) }}" alt="" width="100px" class="w-full h-full object-cover">
            </figure>
            <div class="card-body text-white">
              <p class="text-sm">{{ $berita->tanggal }}</p>
                <h2 class="card-title">{{ $berita->detail }}</h2>
            </div>
        </div>
        @endforeach
    </div>
</section>
<script>
    document.addEventListener("DOMContentLoaded", () => {
        const counters = document.querySelectorAll(".counter");

        const animateCounter = (el) => {
            const target = +el.getAttribute("data-count");
            const duration = 2000; // durasi dalam ms
            const start = 0;
            const increment = target / (duration / 20);
            let current = start;

            const updateCounter = () => {
                current += increment;
                if (current >= target) {
                    el.textContent = target.toLocaleString(); // Format ribuan
                } else {
                    el.textContent = Math.floor(current).toLocaleString();
                    requestAnimationFrame(updateCounter);
                }
            };

            updateCounter();
        };

        const observer = new IntersectionObserver(entries => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    animateCounter(entry.target);
                    observer.unobserve(entry.target); // agar animasi hanya sekali
                }
            });
        }, {
            threshold: 0.5
        });

        counters.forEach(counter => observer.observe(counter));
    });
</script>
@endsection