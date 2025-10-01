

<?php $__env->startSection('content'); ?>
    <section class="">
        <div class="flex items-center justify-center py-10">
            <div class="relative inline-block">
                <span class="absolute top-2 left-2 w-full h-full bg-black  shadow-2xl "></span>
                <h1
                    class="relative text-center font-bold text-2xl bg-blue-100 w-130 py-5  
  transform transition duration-300 hover:scale-105 text-blue-500 border-2 border-gray-800">
                    Pegawai SMKN 4 Tasikmalaya
                </h1>
            </div>
        </div>
        <?php $__currentLoopData = $gurus; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $jabatan => $listGurus): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="bg-black">
                <h2 class="text-xl font-semibold py-5 text-white ms-10"><?php echo e($jabatan); ?></h2>
            </div>
            <div class="flex justify-center gap-10 my-10 flex-wrap">
                <?php $__currentLoopData = $listGurus; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $gurus): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="relative w-96 my-6">
                        <span class="absolute top-2 left-2 w-full h-full bg-black shadow-2xl"></span>
                        <div
                            class="relative bg-blue-100 w-full shadow-sm transform transition duration-300 hover:scale-105 hover:shadow-2xl border-2 border-gray-800 ">
                            <div class="h-85 w-full overflow-hidden">
                                <img src="<?php echo e(asset('storage/' . $gurus->foto)); ?>" alt=""
                                    class="w-full h-full object-cover">
                            </div>
                            <div class="card-body  items-center">
                                <h2 class="card-title font-drak "><?php echo e($gurus->nama); ?></h2>
                                <h2 class="card-title font-drak "><?php echo e($gurus->bagian); ?></h2>
                            </div>
                        </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.layout', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\websekolah\resources\views/guru.blade.php ENDPATH**/ ?>