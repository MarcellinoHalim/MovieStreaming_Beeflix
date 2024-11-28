<?php $__env->startSection('content'); ?>
<?php if(@session('success')): ?>
    <div class="alert alert-success">
        <?php echo e(session('success')); ?>

    </div> 
<?php endif; ?>

<div class="row mt-2 mb-4">
    <div class="col">
        <img src="<?php echo e(asset('images/banner.jpg')); ?>" alt="" class="mb-1 rounded w-100">
    </div>
</div>
<div class="row my-4">
    <div class="col-4"></div>
    <div class="col-4 d-flex justify-content-center align-items-center">
        <a class="btn btn-dark w-100" href="<?php echo e(route('movie.input')); ?>">Add New Movie</a>
    </div>
</div>
<div class="row">
    <?php $__currentLoopData = $movies; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $movie): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="col-3 my-2 d-flex justify-content-center">
            <div class="card" style="width: 15rem;">
                <img src="<?php echo e(asset($movie->photo)); ?>" class="card-img-top" alt="" style="height: 350px; width: 100%; object-fit: cover;">
                <div class="card-body d-flex flex-column">
                    <h5 class="card-title"><?php echo e($movie->title); ?></h5>
                    <h6 class="card-subtitle mb-2 text-muted"><?php echo e($movie->genre->name); ?></h6>
                    <p class="card-text flex-grow-1"><?php echo e($movie->description); ?></p>
                    <p class="text-muted"><?php echo e($movie->publish_date); ?></p>               
                    <a href="<?php echo e(route('movie.delete', $movie->id)); ?>" class="btn btn-danger w-100">Delete</a>
                </div>
            </div>
        </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <?php echo e($movies->links()); ?>

</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\gslc_wp_9\resources\views/home.blade.php ENDPATH**/ ?>