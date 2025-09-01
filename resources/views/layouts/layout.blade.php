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
  <style>
  .b{
    background: url(https://smkn4tsm-frida.vercel.app/_nuxt/background.D5LpaZoT.png) no-repeat top fixed;
    background-size: cover;
    padding-top: 5rem;
    position: relative;
    width: 100%;
  }
</style>
    @foreach ($profil as $profil)
    <header class="border-b border-gray-200/70 dark:border-white/10 sticky top-0 backdrop-blur supports-[backdrop-filter]:bg-white/70 supports-[backdrop-filter]:dark:bg-gray-950/60 z-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 h-16 flex items-center justify-between">
      <img src="{{ asset('storage/'. $profil->logo) }}" alt="" width="50px" class=" rounded-full">
      <a href="#" class="font-bold tracking-tight text-xl">{{ $profil->nama_sekolah }}</a>
      <nav class="hidden md:flex items-center gap-6 text-sm">
        <a href="{{ route('welcome') }}" class="hover:text-indigo-600 link-underline">Beranda</a>
        <a href="{{ route('profil') }}" class="hover:text-indigo-600 link-underline">Profil</a>
        <a href="{{ route('jurusan') }}" class="hover:text-indigo-600 link-underline">Kompetensi Keahlian</a>
        <a href="{{ route('sarpras') }}" class="hover:text-indigo-600 link-underline">Sarana Prasarana</a>
        <a href="{{ route('eskul') }}" class="hover:text-indigo-600 link-underline">Ekstrakulikuler</a>
        <a href="{{ route('rombel') }}" class="hover:text-indigo-600 link-underline">Rombongan Belajar</a>
      </nav>
    </div>
  </header>
    @endforeach
    <div>
        @yield('content')
    </div>

    <section>
      <footer class="footer sm:footer-horizontal bg-base-200 text-base-content p-10">
  <aside>
      <img src="{{ asset('storage/'. $profil->logo) }}" alt="" width="50px" class=" rounded-full">
    <p>
      {{ $profil->nama_sekolah }}
      <br />
      Providing reliable tech since 1992
    </p>
  </aside>
  <nav>
    <h6 class="footer-title">Alamat</h6>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3957.2131636317426!2d108.25189907404213!3d-7.32993997208793!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6f59eeb6bda36f%3A0xa9e724a275da6c2d!2sSMK%20Negeri%204%20Tasikmalaya!5e0!3m2!1sid!2sid!4v1734660682140!5m2!1sid!2sid" frameborder="0"></iframe>

  </nav>
  <nav>
    <h6 class="footer-title">Kontak</h6>
    <a class="link link-hover">About us</a>
    <a class="link link-hover">Contact</a>
    <a class="link link-hover">Jobs</a>
    <a class="link link-hover">Press kit</a>
  </nav>
  
</footer>
    </section>
    <footer>
      <footer class="footer sm:footer-horizontal bg-neutral text-neutral-content items-center p-4">
  <aside class="grid-flow-col items-center ">
    <p>Copyright © 2025 - All right reserved</p>
  </aside>
  <nav class="grid-flow-col gap-4 md:place-self-center md:justify-self-end">
    <a>
      <svg
        xmlns="http://www.w3.org/2000/svg"
        width="24"
        height="24"
        viewBox="0 0 24 24"
        class="fill-current">
        <path
          d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z"></path>
      </svg>
    </a>
    <a>
      <svg
        xmlns="http://www.w3.org/2000/svg"
        width="24"
        height="24"
        viewBox="0 0 24 24"
        class="fill-current">
        <path
          d="M19.615 3.184c-3.604-.246-11.631-.245-15.23 0-3.897.266-4.356 2.62-4.385 8.816.029 6.185.484 8.549 4.385 8.816 3.6.245 11.626.246 15.23 0 3.897-.266 4.356-2.62 4.385-8.816-.029-6.185-.484-8.549-4.385-8.816zm-10.615 12.816v-8l8 3.993-8 4.007z"></path>
      </svg>
    </a>
    <a>
      <svg
        xmlns="http://www.w3.org/2000/svg"
        width="24"
        height="24"
        viewBox="0 0 24 24"
        class="fill-current">
        <path
          d="M9 8h-3v4h3v12h5v-12h3.642l.358-4h-4v-1.667c0-.955.192-1.333 1.115-1.333h2.885v-5h-3.808c-3.596 0-5.192 1.583-5.192 4.615v3.385z"></path>
      </svg>
    </a>
  </nav>
</footer>
    </footer>
</body>
</html>