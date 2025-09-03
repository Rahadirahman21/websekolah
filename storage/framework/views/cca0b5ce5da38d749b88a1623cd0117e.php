<?php $__env->startSection('content'); ?>
<section class="">
    <div class="flex items-center justify-center py-10">
        <h1 class="text-center font-bold text-2xl bg-black w-130 text-white py-5 rounded-md shadow-sm transform transition duration-300 hover:scale-105 hover:shadow-2xl">Kompetensi Keahlian SMKN 4 Tasikmalaya</h1>
    </div>
    <div class="flex justify-center gap-15  flex-wrap">
        <?php $__currentLoopData = $jurusan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $jurusan): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="card bg-black w-96 shadow-lg  md:w-1/4 my-10 transform transition duration-300 hover:scale-105 hover:shadow-2xl ">
            <figure>
                <img src="<?php echo e(asset('storage/'. $jurusan->foto)); ?>" alt="" width="100px" class="bg-white rounded  my-5">
            </figure>
            <div class="card-body text-white">
                <h2 class="card-title"><?php echo e($jurusan->nama_jurusan); ?></h2>
                <p class="line-clamp-3"><?php echo e($jurusan->pengertian); ?></p>
                <div class="card-actions justify-end">
                    <button class="btn btn-primary">Selengkapnya</button>
                </div>
            </div>
        </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
</section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.layout', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\websekolah\resources\views/jurusan.blade.php ENDPATH**/ ?>