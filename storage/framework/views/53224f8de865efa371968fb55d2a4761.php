<?php $__env->startSection('content'); ?>
    <section class="">
        <div class="flex items-center justify-center py-10">
            <div class="relative inline-block">
                <span class="absolute top-2 left-2 w-full h-full bg-black  shadow-2xl "></span>
                <h1
                    class="relative text-center font-bold text-2xl bg-blue-100 w-130 py-5  
  transform transition duration-300 hover:scale-105 text-blue-500 border-2 border-gray-800">
                    Ekstrakurikuler SMKN 4 Tasikmalaya
                </h1>
            </div>
        </div>
        <div class="flex justify-center gap-15 flex-wrap px-4">
            <?php $__currentLoopData = $eskul; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $eskul): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="relative w-96 my-10 md:w-1/4">
                    <span class="absolute top-2 left-2 w-full h-full bg-black shadow-2xl"></span>
                    <div
                        class="relative bg-blue-100 w-full shadow-lg transform transition duration-300 hover:scale-105 hover:shadow-2xl border-2 border-gray-800 ">
                        <div class="h-56 w-full overflow-hidden">
                            <img src="<?php echo e(asset('storage/' . $eskul->foto)); ?>" alt="<?php echo e($eskul->nama_eskul); ?>"
                                class="w-full h-full object-cover">
                        </div>
                        <div class="card-body p-4 ">
                            <h2 class="card-title text-lg font-semibold mb-2"><?php echo e($eskul->nama_eskul); ?></h2>
                            <p class="text-sm mb-1">Jadwal: <?php echo e($eskul->jadwal); ?></p>
                            <p class=" text-sm mb-4"><?php echo e(Str::limit($eskul->detail, 80)); ?></p>

                            <div class="card-actions justify-end">
                                <button
                                    class="btn btn-primary px-4 py-2 rounded-md bg-blue-600 hover:bg-blue-700 transition">
                                    Selengkapnya
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.layout', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\websekolah\resources\views/eskul.blade.php ENDPATH**/ ?>