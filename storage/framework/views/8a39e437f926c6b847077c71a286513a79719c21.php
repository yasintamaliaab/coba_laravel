

<?php $__env->startSection('title','About'); ?>

<?php $__env->startSection('container'); ?>
    <div class="container">
        <div class="row">
            <div class="col-10">
            <h1 class="mt-4">About <?php echo $nama;?></h1>
            <h1 class="mt-4">About <?= $nama;?></h1>
            <h1 class="mt-4">About <?php echo e($nama); ?> </h1>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\cobaLaravel\resources\views/about.blade.php ENDPATH**/ ?>