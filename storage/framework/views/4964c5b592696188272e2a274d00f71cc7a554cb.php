<?php $__env->startSection('title', 'Dashboard'); ?>




<?php $__env->startSection('content'); ?>
<div class="card mb-3" style="max-width: 540px;">
    <div class="row no-gutters">
        <div class="col-md-4">
            <?php if(auth()->guard()->check()): ?>
            <img src=" " alt="...">
        </div>
        <div class="col-md-8">
            <div class="card-body">

                <h5 class="card-title"><?php echo e(Auth()->user()->name); ?></h5>

                <p class="card-text">
                    Email : <?php echo e(Auth()->user()->email); ?>

                </p>
                <p class="card-text">
                    Alamat : <?php echo e(Auth()->user()->alamat); ?>

                </p>
                <?php endif; ?>
                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\blog\resources\views/profile.blade.php ENDPATH**/ ?>