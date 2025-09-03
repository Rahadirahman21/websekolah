<?php $__env->startSection('content'); ?>

<section class="">
    <div class="flex items-center justify-center py-10 ">
        <h1 class="text-center font-bold text-2xl bg-black w-130 text-white py-5 rounded-md shadow-lg transform transition duration-300 hover:scale-105 hover:shadow-4xl">Sarana Prasarana  SMKN 4 Tasikmalaya</h1>
    </div>
    <?php $__currentLoopData = $sarpras; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $jenis => $listSarpras): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <div class="bg-black">
        <h2 class="text-xl font-semibold py-5 text-white ms-10"><?php echo e($jenis); ?></h2>
    </div>
        <div class="flex justify-center gap-10 my-10 flex-wrap">
            <?php $__currentLoopData = $listSarpras; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sarpras): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="card bg-black w-96 shadow-sm transform transition duration-300 hover:scale-105 hover:shadow-2xl">
                    <div class="h-56 w-full overflow-hidden">
                    <img src="<?php echo e(asset('storage/' . $sarpras->foto)); ?>" alt="<?php echo e($sarpras->nama_tempat); ?>" 
                         class="w-full h-full object-cover">
                </div>
                    <div class="card-body text-white">
                        <h2 class="card-title font-drak"><?php echo e($sarpras->nama_tempat); ?></h2>
                    </div>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.layout', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\websekolah\resources\views/sarpras.blade.php ENDPATH**/ ?>