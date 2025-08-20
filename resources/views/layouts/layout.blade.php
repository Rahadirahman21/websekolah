<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/daisyui@5" rel="stylesheet" type="text/css" />
<script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>
<body>
    @foreach ($profil as $profil)
    <header class="bg-gray-800">
        <nav class="container mx-auto px-6 py-3">
          <div class="flex items-center justify-between">
            <div class="text-white font-bold text-xl">
              <a href="#">
                <div class="flex items-center">
                    <img src="{{ asset('storage/'. $profil->logo) }}" alt="" width="50px" class=" rounded-full">
                    <h1 class="ms-4">{{ $profil->nama_sekolah }}</h1>
                </div>
              </a>
            </div>
            <div class="hidden md:block">
              <ul class="flex items-center space-x-8">
                <li><a href="{{ route('welcome') }}" class="text-white">Home</a></li>
                <li><a href="{{ route('profil') }}" class="text-white">Profil</a></li>
                <li><a href="{{ route('jurusan') }}" class="text-white">Kompetensi Keahlian</a></li>
                <li><a href="{{ route('sarpras') }}" class="text-white">Sarana Prasarana</a></li>
                <li><a href="{{ route('eskul') }}" class="text-white">Ekstrakulikuler</a></li>
                <li><a href="{{ route('rombel') }}" class="text-white">Rombongan Belajar</a></li>
              </ul>
            </div>
            <div class="md:hidden">
              <button class="outline-none mobile-menu-button">
                <svg class="w-6 h-6 text-white" x-show="!showMenu" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                  <path d="M4 6h16M4 12h16M4 18h16"></path>
                </svg>
              </button>
            </div>
          </div>
          <div class="mobile-menu hidden md:hidden">
            <ul class="mt-4 space-y-4">
              <li><a href="{{ route('welcome') }}" class="block px-4 py-2 text-white bg-gray-900 rounded">Home</a></li>
              <li><a href="{{ route('profil') }}" class="block px-4 py-2 text-white bg-gray-900 rounded">Profil</a></li>
              <li><a href="{{ route('jurusan') }}" class="block px-4 py-2 text-white bg-gray-900 rounded">Kompetensi Keahlian</a></li>
              <li><a href="{{ route('eskul') }}" class="block px-4 py-2 text-white bg-gray-900 rounded">Ekstrakulikuler</a></li>
            </ul>
          </div>
          
        </nav>
      </header>
    @endforeach
    <div>
        @yield('content')
    </div>
</body>
</html>