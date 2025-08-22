<?php $__env->startSection('content'); ?>

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
    
<section class="relative py-12 bg-gradient-to-br from-gray-900 via-gray-800 to-gray-900 text-white overflow-hidden">
    <h1 class="text-center font-bold text-2xl mb-8">Ekstrakulikuler SMKN 4 Tasikmalaya</h1>
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8 max-w-6xl mx-auto">
        <?php $__currentLoopData = $eskul; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $eskul): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="card bg-gray-700 shadow-lg rounded-lg overflow-hidden">
                <div class="h-56 w-full overflow-hidden">
                    <img src="<?php echo e(asset('storage/' . $eskul->foto)); ?>" alt="<?php echo e($eskul->nama_eskul); ?>" 
                         class="w-full h-full object-cover">
                </div>
                <div class="card-body p-4">
                    <h2 class="card-title text-lg font-semibold mb-2"><?php echo e($eskul->nama_eskul); ?></h2>
                    <p class="text-sm mb-1">Jadwal: <?php echo e($eskul->jadwal); ?></p>
                    <p class="text-gray-300 text-sm mb-4"><?php echo e(Str::limit($eskul->detail, 80)); ?></p>
                    
                    <div class="card-actions justify-end">
                        <button class="btn btn-primary px-4 py-2 rounded-md bg-blue-600 hover:bg-blue-700 transition">
                            Selengkapnya
                        </button>
                    </div>
                </div>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
</section>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.layout', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\websekolah\resources\views/eskul.blade.php ENDPATH**/ ?>