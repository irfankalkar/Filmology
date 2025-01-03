<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" /> -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/body.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/header.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/navbar.css')); ?>">
    
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/trailer_section.css')); ?>">
</head>
<body>



    <header class="container-fluid border_white">
        <?php echo $__env->make("layouts.front.header", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </header>

     <?php echo $__env->make("layouts.front.line_btw_header_navbar", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <nav class="navbar navbar-expand-lg py-0 border_black header_next_navbar_outer">
        <?php echo $__env->make("layouts.front.navbar", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </nav>



        <?php echo $__env->yieldContent('content_1'); ?>

    

    <?php echo $__env->make("layouts.front.footer", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <script src="<?php echo e(asset('assets/js/trailer_section.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/header.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/navbar.js')); ?>"></script>
</body>
</html><?php /**PATH C:\wamp64\www\Filmology\resources\views/layouts/front.blade.php ENDPATH**/ ?>