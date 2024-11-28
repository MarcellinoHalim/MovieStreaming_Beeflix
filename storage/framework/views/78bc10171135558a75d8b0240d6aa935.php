<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="<?php echo e(asset('css/bootstrap.min.css')); ?>">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col mt-3 mb-2">
                <img src="<?php echo e(asset('images/logo.png')); ?>" alt="" width="100px">
            </div>
        </div>
        <div class="row">
            <div class="col"><?php echo $__env->yieldContent('content'); ?></div>
        </div>
        <div class="row">
            <div class="col mt-2 mb-3 text-center">&copy;2024 Marcellino Halim</div>
        </div>
    </div>
    
</body>
<script src="<?php echo e(asset('js/bootstrap.bundle.min.js')); ?>"></script>
</html><?php /**PATH C:\xampp\htdocs\BeeFlix\resources\views/layout.blade.php ENDPATH**/ ?>