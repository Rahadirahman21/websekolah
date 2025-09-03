<?php $__env->startSection('content'); ?>
<?php $__currentLoopData = $setting; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $s): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<section class=" bg-center bg-cover bg-no-repeat h-200" style="background-image: url('<?php echo e(asset('storage/coba/bg2.jpg')); ?>');">
  
</section>

  
<section class="">
  <div class="container mx-auto px-4 py-10 ">
    <div class="bg-white shadow-lg rounded-lg p-6 md:p-10 flex flex-col md:flex-row gap-6 items-centertransform transition duration-300 hover:scale-105 hover:shadow-2xl ">
      
      <div class="md:w-1/2 flex justify-center">
        <img src="<?php echo e(asset('storage/'. $s->foto)); ?>" alt="Kepala Sekolah" class="rounded-lg w-full max-w-sm object-cover ">
      </div>
      <div class="md:w-1/2">
        <h3 class="text-blue-500 font-semibold text-lg mb-2">Sambutan Kepala Sekolah</h3>
        <h2 class="text-gray-800 font-bold text-2xl md:text-3xl mb-4"><?php echo e($s->nama_kepsek); ?></h2>
        <h1>Assalamualaikum Warahmatullahi Wabarakatuh</h1>
        <h2><?php echo e($s->sambutan); ?></h2>
        <h1>Wassalamu'alaikum Warahmatullahi Wabarakatuh</h1>
      </div>
    </div>
  </div>
</section>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<section class="relative py-12 bg-gradient-to-br from-gray-900 via-gray-700 to-gray-900 text-white overflow-hidden">
  <div class="flex items-center justify-center my-5">
        <h1 class="text-center font-bold text-2xl font">Statistik SMKN 4 Tasikmalaya</h1>
    </div>
    <div class="flex justify-center gap-15 my-20 flex-wrap">
        <div class="card bg-gray-700 w-75 shadow-lg   my-10 transform transition duration-300 hover:scale-105 hover:shadow-2xl ">
            <div class="card-body items-center">
                <h2 class="card-title">Guru</h2>
                  <h1 class="text-4xl font-bold counter" data-count="<?php echo e($jml_guru); ?>"></h1>
            </div>
        </div>
        <div class="card bg-gray-700 w-75 shadow-lg  my-10 transform transition duration-300 hover:scale-105 hover:shadow-2xl ">
            <div class="card-body items-center">
                <?php $__currentLoopData = $siswa; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $siswa): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>   
                <h2 class="card-title">Siswa</h2>
                <h1 class="text-4xl font-bold counter" data-count="<?php echo e($siswa->jml_siswa); ?>"></h1>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
        <div class="card bg-gray-700 w-75 shadow-lg  my-10 transform transition duration-300 hover:scale-105 hover:shadow-2xl ">
            <div class="card-body items-center">
                <h2 class="card-title">Konsentrasi Keahlian</h2>
                <h1 class="text-4xl font-bold counter" data-count="<?php echo e($jml_jurusan); ?>"></h1>
            </div>
        </div>
        <div class="card bg-gray-700 w-75 shadow-lg  my-10 transform transition duration-300 hover:scale-105 hover:shadow-2xl ">
            <div class="card-body items-center">
                <h2 class="card-title">Ekstrakulikuler</h2>
                <h1 class="text-4xl font-bold counter" data-count="<?php echo e($jml_eskul); ?>"></h1>
            </div>
        </div>
        <div class="card bg-gray-700 w-75 shadow-lg  my-10 transform transition duration-300 hover:scale-105 hover:shadow-2xl ">
            <div class="card-body items-center">
                <h2 class="card-title text-center">Rombongan Belajar</h2>
                <h1 class="text-4xl font-bold counter" data-count="<?php echo e($jml_rombel); ?>"></h1>
            </div>
        </div>
    </div>
</section>
<section class="b">
    <div class="flex items-center justify-center py-10">
        <h1 class="text-center font-bold text-2xl bg-black w-130 text-white py-5 rounded-md shadow-sm transform transition duration-300 hover:scale-105 hover:shadow-2xl">Berita SMKN 4 Tasikmalaya</h1>
    </div>
    <div class="flex justify-center gap-15 flex-wrap">
        <?php $__currentLoopData = $berita; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $berita): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="card bg-gray-900 w-96 shadow-lg  md:w-1/4 my-10 transform transition duration-300 hover:scale-105 hover:shadow-2xl ">
            <figure>
                <img src="<?php echo e(asset('storage/'. $berita->foto)); ?>" alt="" width="100px" class="w-full h-full object-cover">
            </figure>
            <div class="card-body text-white">
              <p class="text-sm"><?php echo e($berita->tanggal); ?></p>
                <h2 class="card-title"><?php echo e($berita->detail); ?></h2>
            </div>
        </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.layout', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\websekolah\resources\views/welcome.blade.php ENDPATH**/ ?>