<?php $__env->startSection('content'); ?>
<div class="container mx-auto px-4 py-10">
  <div class="bg-black shadow-lg rounded-lg p-6 md:p-10">
    <h2 class="text-blue-500 font-bold text-2xl mb-4">Identitas Sekolah</h2>

    <table class="table-auto w-full text-white ">
      <tbody>
        <tr><td class="py-2 px-4 font-semibold">Nama Sekolah</td><td class="py-2 px-4">: <?php echo e($identitas->nama_sekolah); ?></td></tr>
        <tr><td class="py-2 px-4 font-semibold">NPSN</td><td class="py-2 px-4">: <?php echo e($identitas->npsn); ?></td></tr>
        <tr><td class="py-2 px-4 font-semibold">Alamat</td><td class="py-2 px-4">: <?php echo e($identitas->alamat); ?></td></tr>
        <tr><td class="py-2 px-4 font-semibold">Telepon</td><td class="py-2 px-4">: <?php echo e($identitas->telepon); ?></td></tr>
        <tr><td class="py-2 px-4 font-semibold">Email</td><td class="py-2 px-4">: <?php echo e($identitas->email); ?></td></tr>
        <tr><td class="py-2 px-4 font-semibold">Tahun Berdiri</td><td class="py-2 px-4">: <?php echo e($identitas->tahun_berdiri); ?></td></tr>
        <tr><td class="py-2 px-4 font-semibold">No SK</td><td class="py-2 px-4">: <?php echo e($identitas->no_sk); ?></td></tr>
        <tr><td class="py-2 px-4 font-semibold">Tanggal SK</td><td class="py-2 px-4">: <?php echo e($identitas->tgl_sk); ?></td></tr>
        <tr><td class="py-2 px-4 font-semibold">Kepemilikan</td><td class="py-2 px-4">: <?php echo e($identitas->kepemilikan); ?></td></tr>
      </tbody>
    </table>
  </div>
</div>


<?php $__currentLoopData = $profil; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<section class="">
  <div class="container mx-auto px-4 py-10 ">
    <div class="bg-black shadow-lg rounded-lg p-6 md:p-10 flex flex-col md:flex-row gap-6 items-centertransform transition duration-300 hover:scale-105 hover:shadow-2xl ">
      <div class="w-full">
        <h3 class="text-blue-500 font-bold text-2xl mb-2">SEJARAH</h3>
        <p class="text-white  mb-4"><?php echo e($p->sejarah); ?></p>
      </div>
    </div>
  </div>
  <div class="container mx-auto px-4 py-10 ">
    <div class="bg-black shadow-lg rounded-lg p-6 md:p-10 flex flex-col md:flex-row gap-6 items-center transform transition duration-300 hover:scale-105 hover:shadow-2xl ">
      <div class="w-full">
        <h3 class="text-blue-500 font-bold text-2xl mb-2">Visi</h3>
        <h2 class="text-white mb-4"><?php echo e($p->visi); ?></h2>
        <h2></h2>
      </div>
    </div>
  </div>
  <div class="container mx-auto px-4 py-10 ">
    <div class="bg-black shadow-lg rounded-lg p-6 md:p-10 flex flex-col md:flex-row gap-6 items-center transform transition duration-300 hover:scale-105 hover:shadow-2xl ">
      <div class="w-full">
        <h3 class="text-blue-500 font-bold text-2xl mb-2">Misi</h3>
        <h2 class="text-white"><?php echo e($p->misi); ?></h2>
        <h2></h2>
      </div>
    </div>
  </div>
</section>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

<section>
  
</section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.layout', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\websekolah\resources\views/profil.blade.php ENDPATH**/ ?>