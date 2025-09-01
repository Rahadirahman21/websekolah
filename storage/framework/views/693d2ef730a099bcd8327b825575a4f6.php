<?php $__env->startSection('content'); ?>

<section>
        
    
</section>
<section class="b">
    <div class="flex items-center justify-center my-5">
        <h1 class="text-center font-bold text-2xl">Rombongan Belajar SMKN 4 Tasikmalaya</h1>
    </div>
    <?php $__currentLoopData = $rombels; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $jurusan => $listRombel): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <h2 class="text-xl font-semibold my-4 ms-10"><?php echo e($jurusan); ?></h2>
        <div class="flex justify-center gap-10 my-10 flex-wrap">
            <?php $__currentLoopData = $listRombel; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $rombel): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="card bg-gray-700 w-96 shadow-sm transform transition duration-300 hover:scale-105 hover:shadow-2xl">
                    <div class="card-body text-white">
                        <h2 class="card-title font-drak"><?php echo e($rombel->nama_kelas); ?></h2>
                        <p>Anggota Rombel : <?php echo e($rombel->jml_perempuan + $rombel->jml_laki_laki); ?></p>
                        <p>Perempuan : <?php echo e($rombel->jml_perempuan); ?></p>
                        <p>Laki - Laki : <?php echo e($rombel->jml_laki_laki); ?></p>
                        <div class="card-actions justify-end">
                            <button class="btn btn-primary">Selengkapnya</button>
                        </div>
                    </div>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</section>



<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.layout', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\websekolah\resources\views/rombel.blade.php ENDPATH**/ ?>